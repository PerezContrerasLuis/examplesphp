<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario con radio buttons</title>
</head>
<body>

	<?php 
	  if(isset($_POST['estado'])){
	  	   $estado= $_POST['estado'];
	  	   echo "Su estado  es ".$estado;
           echo "<br> <a href='combobox.php'>Regresar</a>";
     	  }else{
	  	?>
       <form name="formEstado" action="combobox.php" method="POST">
    	<label>estado</label>
    	<br/>
    	  <select name="estado">
            <option value="guadalajara">GDL</option>
            <option value="ciudad de mexico">CDMX</option>
            <option value="Oaxaca de Juarez">OAX</option>
          </select>
    	<input type="submit" vale="eviar">
    </form>
     <?php

	  }
    ?>
</body>
</html>