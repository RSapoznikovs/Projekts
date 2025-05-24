<?php ob_start(); ?>
<div class="triangles">
  <div class="triangle top">
      <a href="apartments.php"></a>
  </div>
  <div class="triangle right">
      <a href="cars.php"></a>
  </div>
  <div class="triangle bottom">
      <a href="components.php"></a>
  </div>
  <div class="triangle left">
      <a href="jobs.php"></a>
  </div>
</div>
<?php
$header = false;
$content = ob_get_clean();
include 'base.php';