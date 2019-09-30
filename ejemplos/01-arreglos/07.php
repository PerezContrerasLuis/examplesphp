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

    <strong>array_slice: Obtener una parte de un arreglo, como un nuevo arreglo</strong>
<?php

  echo "<pre>";
  $fin_semana = array_slice($semana, 5, 2);
  var_dump($fin_semana);
  echo "</pre>";
?>

    <strong>array_splice: Obtener una parte de un arreglo, substituyendo en el original</strong>
<?php

  echo "<pre>";
  $parte_semana = array_splice($semana, 5, 2, array('NOVIEMBRE', 'DICIEMBRE'));
  var_dump($parte_semana);
  var_dump($semana);
  echo "</pre>";
?>

  </body>
</html>
