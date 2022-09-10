<?php

echo "<strong>Conexion Procedural</strong><br/>";

$serverName = "localHost";
$userName   = "root";
$passUser   = "";

$conexion = mysqli_connect($serverName, $userName, $passUser);

if(!$conexion){

	echo "Error de conexion :".msqli_connect_error();
}else{

	echo "Conexion establecida con éxito";
}