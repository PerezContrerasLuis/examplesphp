<?php
/* Se inicializa una sesión, lo cual creará un
 * archivo dentro de /var/lib/php ya que así
 * se encuentra configurada la directiva session.save_path
 * en php.ini
 */
session_start();

/* ¿Se encuentra el nombre del usuario en la sesión? */
if (isset($_SESSION['tu_nombre'])) {
  $usuario = $_SESSION['tu_nombre'];
} else if (isset($_POST['nombre_usuario'])) {
  /* ¿Se encuentra el nombre del usuario en $_POST? */
  $_SESSION['tu_nombre'] = $_POST['nombre_usuario'];
  $usuario = $_POST['nombre_usuario'];
} else {
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
if (empty($usuario)) {
?>
  <form name="formulario" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Ingresa tu nombre: <input type="text" name="nombre_usuario" value="" />
    <input name="subir" type="submit" value="Subir">
  </form> 
<?php
} else {
?>
  <h1>Hola <?php echo $usuario; ?></h1>
  <a href="02.php">Cerrar sesión</a>
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
  $_SESSION
<?php
  var_dump($_SESSION);
?>
  </pre>

  <hr />
  <p>
  Documentación <br />
  <a href="http://www.php.net/manual/es/function.session-start.php">
    http://www.php.net/manual/es/function.session-start.php
  </a><br />
  <a href="http://php.net/manual/es/function.header.php">
    http://php.net/manual/es/function.header.php
  </a>
  </p>

  </body>
</html>
