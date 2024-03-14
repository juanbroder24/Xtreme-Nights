<?php
session_start();

if(isset($_POST['zona'])) {
  switch ($_POST['zona']) {
    case 'norte':
      $_SESSION['zona'] = '1';
      header("Location: zona_norte.html");
      exit();
      break;
    case 'centro':
      $_SESSION['zona'] = '2';
      header("Location: zona_centro.html");
      exit();
      break;
    case 'sur':
      $_SESSION['zona'] = '3';
      header("Location: zona_sur.html");
      exit();
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>XtremeTech</title>
</head>
<body class="text-center">

  <h1>Xtreme Nights</h1> 

  <form action="procesar_zona.php" method="post">
    <button class="btn btn-primary btn-lg" name="zona" value="norte">Zona Norte</button>
    <button class="btn btn-primary btn-lg" name="zona" value="centro">Zona Centro</button>
    <button class="btn btn-primary btn-lg" name="zona" value="sur">Zona Sur</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>




