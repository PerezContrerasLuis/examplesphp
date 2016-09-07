<?php 

/*
 * Escriba un programa que al recibir los datos 
 * A , B , C  imprima los mismo en orden inverso
 */

  if(isset($_POST['a'])){
    //echo "formulario existe";
    echo "<br/>";
    echo "las letras tiene los siguientes numeros<br/>";
    echo "C : ",$_POST['c'];
    echo "<br/>";
    echo "B : ",$_POST['b'];
    echo "<br/>";
    echo "A : ",$_POST['a'];
  }else{
	 ?>
	  
	  <html>
	  <head>
	  	<title>numero inversos</title>
	  </head>
	  <body>
	     <center>
	     	<form method="post" action="#" name="letras">
	     		<label>Ingrese el numero para la letra A</label>
	     		<input type="text" name="a">
	     		<br/>
	     		<br/>
	     		<label>Ingrese el numero para la letra B</label>
	     		<input type="text" name="b">
	     		<br/>
	     		<br/>
	     		<label>Ingrese el numero para la letra C</label>
	     		<input type="text" name="c">
	     		<br/>
	     		<br/>
	     		<input type="submit" value="Guardar">
	     	</form>
	     </center>
	  </body>
	  </html>

	 <?php

    }
	?>