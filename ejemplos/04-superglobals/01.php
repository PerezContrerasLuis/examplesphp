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

  <strong>$_SERVER</strong>
  <a href="http://www.php.net/manual/es/reserved.variables.server.php">
    http://www.php.net/manual/es/reserved.variables.server.php
  </a>
<?php

  echo "<pre>";
  echo "-----------------------------------------------------------------------------\n";
  echo " este modulo lo agrego luis PC XD \n";
  echo "tu ip es ".getenv(REMOTE_ADDR)."\n";
  echo "tu informacion del server es ".$_SERVER["HTTP_USER_AGENT"]."\n";
  echo "-----------------------------------------------------------------------------\n";
  var_dump($_SERVER);
  echo "</pre>";

  echo "<pre>";
  ?>
  <hr />
  <?php
  echo " recorrido de variable superglobals con el Foreach \n";
  foreach ($_SERVER as $llave => $valor) {
    echo "Llave= ".$llave."\t\t\tValor= ".$valor."\n";
  }
  echo "</pre>";

?>

  </body>
</html>
