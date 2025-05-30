
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://pyscript.net/releases/2024.3.1/core.css">
  <script type="module" src="https://pyscript.net/releases/2024.3.1/core.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <script src="main.js"></script>
  <title>DoCUMent</title>
</head>
<body
  <?php if (!empty($header)) include 'header.php'; ?>
  <main>
    <?php echo $content; ?>
  </main>
</body>
</html>
