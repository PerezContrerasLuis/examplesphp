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

    <strong>asort: Ordenada un arreglo</strong>
<?php

  echo "<pre>";
  asort($semana);
  var_dump($semana);
  echo "</pre>";
?>

    <strong>arsort: Ordenada un arreglo de forma inversa</strong>
<?php

  echo "<pre>";
  arsort($semana);
  var_dump($semana);
  echo "</pre>";
?>

  </body>
</html>
