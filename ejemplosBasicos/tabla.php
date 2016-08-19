<?php
 /*
  * Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100
  */
?>

<html>
<head>
	<title>Tabla</title>
</head>
<body>
   <center>
   	<table border="1">
   	<?php
   	   //for para controlar las filas
   	   $numero =1;
   	   for ($i=0; $i <10 ; $i++) { 
   	   	  echo "<tr>";
   	   	  //For para controlar las columnas
   	   	  for ($j=0; $j <10 ; $j++) { 
   	   	  	$retVal = (($i%2)==0) ? $color="gray" : $color="white" ;
   	   	  	echo "<th style='background-color:".$color."'>".$numero."</th>";
   	   	    $numero ++;
   	   	  }
   	   	   echo "</tr>";
   	   }
   	 ?>
   	 </table>
   </center>
</body>
</html>