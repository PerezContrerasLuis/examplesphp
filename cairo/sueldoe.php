<?php
  /*
  * Programa que calcula el sueldo de un un empleado 
  * el programa calcula el sueldo total semestral y el promedio
  */
  
  //verificamos si existe el post
  if(isset($_POST['s1'])){

  	$total = $_POST['s1']+$_POST['s2']+$_POST['s3']+$_POST['s4']+$_POST['s5']+$_POST['s6'];
  	$promedio = $total/6;
  	 echo "El sueldo total bimestral es: ".$total;
  	 echo "<br/>";
  	 echo "El promedio bimiestral es : ".$promedio;
  	 echo "<br/><br/>";
  	 
	/*$animal[0][0] = "Perro";
	$animal[0][1] = "Gato";
	$animal[1][0] = "Lombriz";
	$animal[1][1] = "Burro";
	$animal[2][0] = "Murciélago";
	$animal[2][1] = "Cocodrilo";*/

print_r($animal);

  }else{
  	?>
  	  <html>
  	  <head>
  	  	<title>sueldo empleado</title>
  	  </head>
  	  <body>
  	  
  	     <center>
  	     	<form action="#" method="POST">
  	     		<label>ingrese el sueldo mes 1</label>
  	     		<input type="text" name="s1">
  	     		<br/>
  	     		<br/>
  	     		<label>ingrese el sueldo mes 2</label>
  	     		<input type="text" name="s2">
  	     		<br/>
  	     		<br/>
  	     		<label>ingrese el sueldo mes 3</label>
  	     		<input type="text" name="s3">
  	     		<br/>
  	     		<br/>
  	     		<label>ingrese el sueldo mes 4</label>
  	     		<input type="text" name="s4">
  	     		<br/>
  	     		<br/>
  	     		<label>ingrese el sueldo mes 5</label>
  	     		<input type="text" name="s5">
  	     		<br/>
  	     		<br/>
  	     		<label>ingrese el sueldo mes 6</label>
  	     		<input type="text" name="s6">
  	     		<br/>
  	     		<br/>
  	     		<input type="submit" value="enviar">

  	     	</form>
  	     </center>
  	  </body>
  	  </html>
  	<?php
  }
 ?>