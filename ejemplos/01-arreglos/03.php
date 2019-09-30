<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
    <a href="http://www.php.net/manual/es/ref.array.php">http://www.php.net/manual/es/ref.array.php</a>
    <hr />

    <strong>Arreglo asociativo :</strong>
<?php
  $estaciones = array(
    'primavera' => array('Febrero', 'Marzo', 'Abril'),
    'verano' => array('Mayo', 'Junio', 'Julio'),
    'otonio' => array('Agosto', 'Septiembre', 'Octubre'),
    'invierno' => array('Noviembre', 'Diciembre', 'Enero')
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
    for ($j = 0; $j < $numero_meses; $j++) {
      echo "i = ".$i.", j = ".$j.", valor = ".$estaciones[$i][$j]."\n";
    }
  }

  echo "Para arreglos asociativos no podemos hacer uso de indices (0, 1, 2,...,n) ya que
accedemos a los valores del arreglo asociativo por medio de llaves ('primavera',...'invierno')";
  echo "</pre>";

?> 

  <strong>Recorriendo un arreglo con foreach:</strong><br />
<?php
  echo"\n ---------------------------------------------------------------";
  echo "<pre>";
  foreach ($estaciones as $valor) {
    echo "valor = ".$valor."\n";
  }
  echo "</pre>";

  echo" -----------------------------------------------------------------";
  echo "<pre>";
  foreach ($estaciones as $estacion) {
    foreach ($estacion as $mes) {
      echo "mes = ".$mes."\n";
    }
  }
  echo "</pre>";
  echo" -----------------------------------------------------------------";
  echo "<pre>";
  foreach ($estaciones as $llave => $valor) {
    echo "llave = ".$llave.", valor = ".$estaciones[$llave]."\n";
  }
  echo "</pre>";
  echo" -----------------------------------------------------------------";
  echo "<pre>";
  foreach ($estaciones as  $meses) {
    foreach ($meses as $mes) {
      echo "Meses = ".$meses.", mes= ".$mes."\n";
    }
  }
  echo "</pre>";
    echo" -----------------------------------------------------------------";

?>
  <br />
  <strong>Finalmente...</strong>
<?php
  echo "<pre>";
  foreach ($estaciones as $estacion => $meses) {
    foreach ($meses as $mes) {
      echo "estacion = ".$estacion.", mes = ".$mes."\n";
    }
  }
  echo "</pre>";
?>

<hr>Con tabla</hr> 
 <table BORDER=1 >
<?php
echo "<pre>";

  
   foreach ($estaciones as $estacion => $meses) {
  ?>
 <tr>
<?php
    foreach ($meses as $mes) {
 ?>
 <td>
      <?php
            echo "estacion =".$estacion.", mes =".$mes."\n";
        ?>
       </td>
<?php
    }
      ?>
 </tr>
<?php
   }
 
  
echo "</pre>";
?>
</table>
  </body>
</html>
