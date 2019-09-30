<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
    <a href="http://www.php.net/manual/es/ref.strings.php">
      http://www.php.net/manual/es/ref.strings.php
    </a>
    <hr />

    <strong>String:</strong>
    <pre>
    $nombre = "Arthur Bertrand";
    $apellidos = "William Russell";
    </pre>
<?php
  $nombre = "Arthur Bertrand";
  $apellidos = "William Russell";

  echo "<pre>";
  echo "Longitud de \$nombre: ".strlen($nombre)."\n";
  echo $nombre." ".$apellidos."\n";
  echo strtolower($nombre)." ".strtoupper($apellidos)."\n";
  echo "</pre>";
?>

    <hr />
    <pre>
    $nombre = "arthur bertrand";
    $apellidos = "wILLIAM rUSSELL";
    </pre>
<?php
  $nombre = "arthur bertrand";
  $apellidos = "wILLIAM rUSSELL";

  echo "<pre>";
  echo $nombre." ".$apellidos."\n";
  echo ucfirst($apellidos)."\n";
  echo ucwords($nombre)."\n";
  echo "</pre>";
?>

    <hr />
    <pre>
    $nombre = "     Arthur Bertrand     ";
    $apellidos = "@_$@_$@_$ William Russell @_$@_$@_$@_$@_$@_$";
    </pre>
<?php
  $nombre = "     Arthur Bertrand     ";
  $apellidos = "@_$@_$@_$ William Russell @_$@_$@_$@_$@_$@_$";

  echo "<pre>";
  echo "->".$nombre."<-\n";
  echo "->".trim($nombre)."<-\n";
  echo "->".$apellidos."<-\n";
  echo "->".trim($apellidos, "@_$")."<-\n";
  echo str_replace("     ", "*****", $nombre)."\n";
  echo "</pre>";
?>
    <hr />
    <pre>
    $nombre_completo = "Arthur Bertrand William Russell";
    </pre>
<?php
  $nombre_completo = "Arthur Bertrand William Russell";
  $arreglo_nombre_completo = explode(" ", $nombre_completo);
  $arreglo_letras = str_split($nombre_completo);

  echo "<pre>";
  var_dump($arreglo_nombre_completo);
  var_dump($arreglo_letras);
  echo "</pre>";
?>

  </body>
</html>
