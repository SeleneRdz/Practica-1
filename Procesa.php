<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Procesa!!</h1>
    <?php
    //var_dump($_POST);
    foreach ($_POST as $key => $value) {
      // code...
      echo "$key = $value <br>";
    }
    $nombre = $_POST['nombre'];
    echo "Mi nombre es $nombre";
     ?>
  </body>
</html>
