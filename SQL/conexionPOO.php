<?php

echo "<strong>Conexion con orientacion a objetos</strong><br>";

$serverName = "localhost";
$userName   = "root";
$passUser   = "";

$conexion = new mysqli($serverName, $userName, $passUser);

if($conexion->connect_error){
     echo "error en la conexion:".$conexion->connect_error;
}else{
  echo "Conexion establecida con éxito ^_^";

}

