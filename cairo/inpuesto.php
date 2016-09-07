<?php 

/*
* programa que calcula el 11% de iva y se lo suma 
* al producto siempre y cuando ete sea de un costo 
* menor a 1500 pesos
*/
  
 if(isset($_POST['precio'])){
  $precio= $_POST['precio'];

  //verificamos si  es inferior a 1500
  if($precio < 1500){
    
    $precio = $precio * 1.11;
  }

  echo "el precio del producto es ".$precio;

 }else{
 ?>
 <!DOCTYPE html>
 <html>
  <head>
  </head>
  <body>
  	<center>
  		<form action="#" method="POST">
  			<label>Ingrese el precio del producto</label>
  			<br/>
  			<br/>
  			<input type="text" name="precio"/>
  			<br/>
  			<br/>
  			<input type="submit" value="registrar" />
  		</form>
  	</center>
  <body>
 </html>
 <?php
 }
?>