<?php
echo "<strong>Select con orientacion a objetos</strong><br>";

$nameServer = "localhost";
$nameUser	= "root";
$passuser	= "";
$dbName		= "pruebasluis";


$conexion = new mysqli($nameServer, $nameUser, $passuser, $dbName);

if($conexion->connect_error){
  echo "Error en la conexion";
}else{

  echo "Conexion efecutado con éxito<br/>";
  $sql = "SELECT * FROM usuario";

  $result = $conexion->query($sql);
  if($result->num_rows > 0){
  	 while($row = $result->fetch_assoc()){
       echo $row['id']." => ".$row['nombre']."<br/>";
  	 }
  }else{
  	echo "<br/>No hay datos para mostrar";
  }
}
