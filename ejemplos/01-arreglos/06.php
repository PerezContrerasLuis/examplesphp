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

    <strong>Busqueda</strong>
<?php

  echo "<pre>";
  $dia = "Miercoles";
  if (in_array($dia, $semana)) {
    echo ":)";
  } else {
    echo ":(";
  }
  echo "</pre>";

  echo "<pre>";
  echo "$dia se encuentra en el indice: ".array_search($dia, $semana)."\n";
  echo "Sabado se encuentra en el indice: ".array_search("Sabado", $semana);
  echo "</pre>";
?>

  </body>
</html>
