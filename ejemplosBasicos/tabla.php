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
   	<table>
   	<?php
   	   //for para controlar las filas
   	   $numero =1;
   	   for ($i=0; $i <10 ; $i++) { 
   	   	  echo "<tr>";
   	   	  //For para controlar las columnas
   	   	  for ($j=0; $j <10 ; $j++) { 
   	   	  	echo "<th>".$numero."</th>";
   	   	    $numero ++;
   	   	  }
   	   	   echo "</tr>";
   	   }
   	 ?>
   	 </table>
   </center>
</body>
</html>