<?php
echo "<strong>Select Procedural</strong><br>";

$nameServer = "localhost";
$nameUser	= "root";
$passUser	="";
$dbName		="pruebasluis";

$conexion = mysqli_connect($nameServer, $nameUser, $passUser, $dbName);

if(!$conexion){
	echo "Error en la conexion";
}else{

  $sql = "SELECT * FROM usuario";

  $result = mysqli_query($conexion,$sql);

  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      echo $row['id']." => ".$row['nombre']."<br/>";
    }
  }else{
  	echo "<br/>No hay datos para mostrar";
  }

}