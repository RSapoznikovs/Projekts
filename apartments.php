<?php ob_start(); ?>

<h2>Apartments</h2>
<p>This is the page content.</p>
<py-script>
import sys
from pyscript import display


display("Hello world")
</py-script>

<?php
$content = ob_get_clean();
include 'base.php';