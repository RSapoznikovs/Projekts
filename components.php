<?php ob_start(); ?>
<div class="container">
  <h2>Computer Components</h2>
  <p>This is the page content.</p>
</div>

<?php
$content = ob_get_clean();
include 'base.php';