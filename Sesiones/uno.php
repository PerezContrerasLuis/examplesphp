<?php

session_start();

echo "Hola soy la pagina UNO <br />";

$_SESSION['nombre']="luis Perez Contreras";

echo $_SESSION['nombre'];

echo "<br />";

echo "<a href='dos.php'>Vamos a la pagina DOS ^_^</a>";

?>