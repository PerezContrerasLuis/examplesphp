<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
    <a href="http://www.php.net/manual/es/ref.array.php">http://www.php.net/manual/es/ref.array.php</a>
    <hr />

    <strong>Arreglo semana:</strong>
<?php
  $semana = array(
    'Lunes',
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado',
    'Domingo',
  );

  echo "<pre>";
  var_dump($semana);
  echo "</pre>";
?>

    <strong>array_map: Aplicar una funciion a los elementos de un arreglo</strong>
<?php

  echo "<pre>";
  $semana_mayusculas = array_map('strtoupper', $semana);
  var_dump($semana_mayusculas);
  echo "</pre>";

?>

  </body>
</html>
