
<div class="container">
  <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
    <li class="nav-item" role="presentation">
      <a href="cars.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'cars.php' ? 'active' : ''; ?> rounded-5">Mašīnas</a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="apartments.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'apartments.php' ? 'active' : ''; ?> rounded-5">Dzīvokļi</a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="jobs.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'jobs.php' ? 'active' : ''; ?> rounded-5">Darbi</a>
    </li>
    <li class="nav-item" role="presentation">
      <a href="components.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'components.php' ? 'active' : ''; ?> rounded-5">Datora Komponenti</a>
    </li>
  </ul>
</div>
