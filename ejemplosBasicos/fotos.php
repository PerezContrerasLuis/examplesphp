<!-- Programa que muestra en una tabla de 4 columnas todas las imágenes de el
directorio "fotos". -->
<html>
<head>
	<title>Fotos</title>
</head>
<body>
  <center>
  	 <?php 
     
     echo "tabla de fotos <br/>";
     if($gestor = opendir('fotos')){
     echo "<table>";
     echo "<tr>";
         while (false !== ($archivo = readdir($gestor))) {

         	if ($archivo !="." && $archivo !="..") {
	         	echo "<td>";
	         	echo "<a href='fotos/$archivo'> <img width=150 heigt=150 src='fotos/$archivo' > </a>";
	         	echo "</td>";	
         	}
         }
     echo "</tr>";
     echo "</table>";

     }
  	 ?>
  </center>
</body>
</html>

