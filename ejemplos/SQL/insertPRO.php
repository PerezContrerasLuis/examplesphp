<?php

echo "<strong>Insercion Procedural</strong><br>";

$serverName = "localhost";
$userName 	= "root";
$passUser	= "";
$dbName		= "pruebasluis";

$conexion = mysqli_connect($serverName, $userName, $passUser, $dbName);

if(!$conexion){

	echo "Error en la conexion";
}else{

	$sql = "INSERT INTO usuario (nombre) values ('john verdon')";

	if(mysqli_query($conexion,$sql)){
		echo "usuario registrado con exito";
	}else{
		echo "Error al intentar registrar usuario";
	}
}

echo "<br/>El usuario se inserto con el ID: ".mysqli_insert_id($conexion);

mysqli_close($conexion);