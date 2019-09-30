<?php

/* ¿Se cuenta con el nombre del usuario en la cookie? */
if (isset($_COOKIE['tu_nombre'])) {
  $usuario = $_COOKIE['tu_nombre'];
} else if (isset($_POST['nombre_usuario'])) {
  /* Se cuenta con el nombre del usuario en $_POST? */
  $usuario = $_POST['nombre_usuario'];
  /* Creamos la cookie con los datos enviados por el formulario (POST) */
  $llave = "tu_nombre";
  $valor = $usuario;
  $expira = time() + 20;
  setcookie($llave, $valor, $expira);
  /* Redireccionamos a este mismo script al cliente (navegador web), 
   * forzando a que los datos en $_POST se pierdan, de tal forma que
   * el usuario no pueda volver a subir los datos del formulario con
   * F5 (refrescando la página).
   *
   * Importante observar el estado de las superglobales.
   */
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = $_SERVER['PHP_SELF'];
  header("Location: http://$host$uri");
} else {
  /* No tenemos el nombre del usuario, ni en la cookie ni en $_POST */
  $usuario = "";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
  </head>
  <body>
  
<?php
/* ¿Esta vacía la variable $usuario?... */
if (empty($usuario)) {
?>
  <form name="formulario" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Ingresa tu nombre: <input type="text" name="nombre_usuario" value="" />
    <input name="subir" type="submit" value="Subir">
  </form> 
<?php
} else {
  /* ... en caso contrario, saludar */
?>
  <h1>Hola <?php echo $usuario; ?></h1>
<?php
}
?>

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
  $_COOKIE
  <?php
    var_dump($_COOKIE);
  ?>
  </pre>

  <p>
  Documentación <br />
  <a href="http://www.php.net/manual/es/function.setcookie.php">
    http://www.php.net/manual/es/function.setcookie.php
  </a><br />
  <a href="http://php.net/manual/es/function.header.php">
    http://php.net/manual/es/function.header.php
  </a>
  </p>

  </body>
</html>
