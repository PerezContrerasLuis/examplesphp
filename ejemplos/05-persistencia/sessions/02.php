<?php
session_start();

/* Se borran las llaves=>valor de la superglobal $_SESSION (arreglo asociativo) */
$_SESSION = array();

/* Se destruye la sesión, el archivo creado dentro de /var/lib/php */
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>

  <h1>Sesión cerrada</h1>
  <a href="01.php">Regresar</a>

  <hr />
  <h2>Estado actual de las superglobales:</h2>
  <pre>
  $_POST
<?php
  var_dump($_POST);
?>
  </pre>
  <hr />
  <pre>
  $_SESSION
<?php
  var_dump($_SESSION);
?>
  </pre>

  <hr />
  <p>
  Documentación <br />
  <a href="http://www.php.net/manual/es/function.session-destroy.php">
    http://www.php.net/manual/es/function.session-destroy.php
  </a>
  </p>

  </body>
</html>
