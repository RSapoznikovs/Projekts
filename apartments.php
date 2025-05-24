<?php ob_start(); ?>

<h2>Apartments</h2>
<p>This is the page content.</p>
<?php
$mh = curl_multi_init();
$curlHandles = [];

for ($i = 1; $i <= 10; $i++) {
    $url = "https://www.ss.lv/lv/real-estate/flats/riga/centre/page{$i}.html";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_multi_add_handle($mh, $ch);

    $curlHandles[$i] = $ch;
}

$running = null;
do {
    curl_multi_exec($mh, $running);
} while ($running > 0);

for ($i = 1; $i <= 10; $i++) {
    $html = curl_multi_getcontent($curlHandles[$i]);

    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    $xpath = new DOMXPath($dom);

    echo "<h2>Links inside '.d1' elements from page $i:</h2><ul>";
    // .d1 links with href and text
    $d1_elements = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' d1 ')]");
    foreach ($d1_elements as $element) {
        $links = $element->getElementsByTagName('a');
        foreach ($links as $link) {
            $href = $link->getAttribute('href');
            $text = trim($link->nodeValue);
            if ($href && $text !== '') {
                $fullHref = "https://www.ss.lv" . $href;
                echo "<li><a href='$fullHref'>$text</a></li>";
            }
        }
    }
    echo "</ul>";

    echo "<h2>Price texts (with €) inside &lt;tr&gt; elements from page $i:</h2><ul>";
    $tr_elements = $xpath->query("//tr");
    foreach ($tr_elements as $tr) {
        $links = $tr->getElementsByTagName('a');
        foreach ($links as $link) {
            $text = trim($link->nodeValue);
            if (strpos($text, '€') !== false && $text !== '') {
                echo "<li>$text</li>";
            }
        }
    }
    echo "</ul>";

    curl_multi_remove_handle($mh, $curlHandles[$i]);
}

curl_multi_close($mh);
?>
$content = ob_get_clean();
include 'base.php';