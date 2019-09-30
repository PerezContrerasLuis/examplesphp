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
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado',
  );

  echo "<pre>";
  var_dump($semana);
  echo "</pre>";
?>

    <strong>Agregar al final</strong>
<?php

  echo "<pre>";
  array_push($semana, "Domingo");
  var_dump($semana);
  echo "</pre>";

?>
    <strong>Agregar al inicio</strong>
<?php

  echo "<pre>";
  array_unshift($semana, "Lunes");
  var_dump($semana);
  echo "</pre>";

?>

    <strong>Extraer y eliminar al final</strong>
<?php

  echo "<pre>";
  $dato = array_pop($semana);
  echo "Dato extraido y eliminado: ".$dato."\n";
  var_dump($semana);
  echo "</pre>";

?>

    <strong>Extraer y eliminar al inicio</strong>
<?php

  echo "<pre>";
  $dato = array_shift($semana);
  echo "Dato extraido y eliminado: ".$dato."\n";
  var_dump($semana);
  echo "</pre>";

?>

  </body>
</html>
