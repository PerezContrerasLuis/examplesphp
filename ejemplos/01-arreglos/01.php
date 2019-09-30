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

 <strong>Recorriendo un arreglo con for:</strong>
<?php

  $numero_semana = count($semana);

  echo "<pre>";
  for ($indice = 0; $indice < $numero_semana; $indice++) {
    echo "indice = ".$indice.", valor = ".$semana[$indice]."\n";
  }
  echo "</pre>";
?> 

  <strong>Recorriendo un arreglo con foreach:</strong>
<?php
  echo "<pre>";
  foreach ($semana as $valor) {
    echo "valor = ".$valor."\n";
  }
  echo "</pre>";

  echo "<pre>";
  foreach ($semana as $indice => $valor) {
    echo "indice = ".$indice.", valor = ".$semana[$indice]."\n";
  }
  echo "</pre>";

?>

  </body>
</html>
