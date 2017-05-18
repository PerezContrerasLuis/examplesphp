<?php

echo "<strong>Insercion con orientacion a objetos</strong><br>";

$serverName = "localhost";
$userName	= "root";
$passUser	= "";
$dbName		= "pruebasluis";


$conexion = new mysqli($serverName, $userName, $passUser, $dbName);

if($conexion->connect_error){
   
   echo "Error en la conexion ";
}else{
  
  $sql = "INSERT INTO usuario (nombre) values ('maria del carmen')";

  if($conexion->query($sql)){
  	echo "El usuario se registro con exito";
  }else{
  	echo "Error al insertar usuario";
  }
}

echo "el usuario se inserto con el ID: ".$conexion->insert_id;
$conexion->close();