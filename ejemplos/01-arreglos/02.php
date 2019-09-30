<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
    <a href="http://www.php.net/manual/es/ref.array.php">http://www.php.net/manual/es/ref.array.php</a>

    <hr />

    <strong>Arreglo bidimensional:</strong>
<?php
  $estaciones = array(
    array('Febrero', 'Marzo', 'Abril'),
    array('Mayo', 'Junio', 'Julio'),
    array('Agosto', 'Septiembre', 'Octubre'),
    array('Noviembre', 'Diciembre', 'Enero')
  );

  echo "<pre>";
  var_dump($estaciones);
  echo "</pre>";
?>

 <strong>Recorriendo un arreglo con for:</strong>
<?php

  $numero_estaciones = count($estaciones);

  echo "<pre>";
  for ($indice = 0; $indice < $numero_estaciones; $indice++) {
    echo "indice = ".$indice.", valor = ".$estaciones[$indice]."\n";
  }
  echo "</pre>";

  echo "<pre>";
  for ($i = 0; $i < $numero_estaciones; $i++) {
    $numero_meses = count($estaciones[$i]);
   // echo"numero de meses".$numero_meses."\n";
    for ($j = 0; $j < $numero_meses; $j++) {
      echo "i = ".$i.", j = ".$j.", valor = ".$estaciones[$i][$j]."\n";
    }
  }
  echo "</pre>";

?> 

  <strong>Recorriendo un arreglo con foreach:</strong>
<?php
  echo "<pre>";
  foreach ($estaciones as $valor) {
    echo "valor = ".$valor."\n";
  }
  echo "</pre>";

  echo "<pre>";
  foreach ($estaciones as $estacion) {
    foreach ($estacion as $mes) {
      echo "mes = ".$mes."\n";
    }
  }
  echo "</pre>";

  echo "<pre>";
  foreach ($estaciones as $indice => $valor) {
    echo "indice = ".$indice.", valor = ".$estaciones[$indice]."\n";
  }
  echo "</pre>";

  echo "<pre>";
  foreach ($estaciones as $indice => $meses) {
    foreach ($meses as $mes) {
      echo "indice = ".$indice.", meses = ".$meses.", mes= ".$mes."\n";
    }
  }
  echo "</pre>";

?>

  </body>
</html>
