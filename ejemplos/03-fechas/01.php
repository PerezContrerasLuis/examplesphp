<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
    <a href="http://www.php.net/manual/es/book.datetime.php">
      http://www.php.net/manual/es/book.datetime.php
    </a>
    <hr />

  <strong>time: Regresa el "Unix timestamp"</strong>
  <a href="http://es.wikipedia.org/wiki/Tiempo_Unix">
    http://es.wikipedia.org/wiki/Tiempo_Unix
  </a>
<?php

  $timestamp = time();

  echo "<pre>";
  echo $timestamp."\n";
  echo "</pre>";

  echo "fecha con formato".date("D/M/Y",$timestamp)."\n";


?>
  <br />
  <strong>strftime: Regresa la fecha a partir del "Unix timestamp" con cierto formato</strong>
  <a href="http://php.net/manual/es/function.strftime.php">
    http://php.net/manual/es/function.strftime.php
  </a>
<?php

  echo "<pre>";
  echo strftime("%d de %B del %d")."\n";
  echo "</pre>";

?>

  <strong>date_parse: Regresa un arreglo asociativo a partir de una fecha</strong>
  <a href="http://www.php.net/manual/es/datetime.formats.php">
    http://www.php.net/manual/es/datetime.formats.php
  </a>
<?php

  echo "<pre>";
  var_dump(date_parse("2013-02-08 15:30"));
  echo "</pre>";

?>

  <strong>Visualizando la fecha en español(México)</strong>
  <a href="http://www.php.net/manual/es/function.setlocale.php">
    http://www.php.net/manual/es/function.setlocale.php
  </a>
  <a hreF="http://www.php.net/manual/es/timezones.america.php">
    http://www.php.net/manual/es/timezones.america.php
  </a>
<?php

  echo "<pre>";
  setlocale(LC_ALL, 'es_MX.utf8');
  date_default_timezone_set("America/Mexico_City");

  echo strftime("%d de %B del %d")."\n";
  echo "</pre>";

?>

  </body>
</html>
