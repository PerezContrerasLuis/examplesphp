<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
  <a href="http://www.php.net/manual/es/language.variables.superglobals.php">
    http://www.php.net/manual/es/language.variables.superglobals.php
  </a>
  <hr />

  <strong>$_GET</strong>
  <a href="http://www.php.net/manual/es/reserved.variables.get.php">
    http://www.php.net/manual/es/reserved.variables.get.php
  </a>
<?php

  if (empty($_GET)) {
    echo "<p><strong>Arreglo asociativo \$_GET vacío</strong></p>";
  } else {
    echo "<p><strong>Arreglo asociativo \$_GET</strong></p>";
    echo "<pre>";
    foreach ($_GET as $llave => $valor) {
      echo "Llave= ".$llave."\t\t\tValor= ".$valor."\n";
    }
    echo "</pre>";
  }

?>

  <hr />
  Query string
  <a href="http://es.wikipedia.org/wiki/Query_string">
    http://es.wikipedia.org/wiki/Query_string
  </a>
  <ul>
    <li>
      Sin uso de Query String: 
      <a href="02.php">
        02.php
      </a>
    </li>
    <li>
      <a href="02.php?llave1=valor1&llave2=valor2&llave3=valor3">
        02.php?llave1=valor1&llave2=valor2&llave3=valor3
      </a>
    </li>
    <li>
      <a href="02.php?nombre=Antonio Hernández Blas">
        02.php?nombre=Antonio Hernández Blas
      </a>
    </li>
    <li>
      <a href="02.php?llave1&llave2&llave3&llave4">
        02.php?llave1&llave2&llave3&llave4
      </a>
    </li>
    <li>
      <a href="02.php?llave1&llave2=valor2&llave3&llave4&llave5=valor5">
        02.php?llave1&llave2=valor2&llave3&llave4&llave5=valor5
      </a>
    </li>
  </ul>
  <a href="http://www.danrigsby.com/blog/index.php/2008/06/17/rest-and-max-url-size/">
    http://www.danrigsby.com/blog/index.php/2008/06/17/rest-and-max-url-size/
  </a>
  </body>
</html>
