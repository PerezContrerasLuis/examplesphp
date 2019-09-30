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
  /* Es la fecha en la que expirará la cookie creada. La función
   * time() devuelve el momento actual en segundos y a este le sumamos
   * 20 segundos más por lo tanto la cookie creada tendrá un tiempo de vida de
   * 20 segundos.
   */
  $expira = time() + 20;
  setcookie($llave, $valor, $expira);
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

  <hr />
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
