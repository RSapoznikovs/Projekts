<?php ob_start(); ?>

<h2>Cars</h2>
<p>This is the page content.</p>

<?php
$content = ob_get_clean();
include 'base.php';