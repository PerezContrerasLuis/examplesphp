<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario con radio buttons</title>
</head>
<body>

	<?php 
	  if(isset($_POST['radio'])){
	  	   $sexo= $_POST['radio'];
	  	   echo "Su sexo es ".$sexo;
     	  }else{
	  	?>
       <form name="sexo" action="radios.php" method="POST">
    	<label>Sexo</label>
    	<br/>
    	Masculino<input type="radio" name="radio" value="Masculino" checked>
    	<br/>
    	Femenino<input type="radio" name="radio" value="Femenino" >
    	<br/>
    	<input type="submit" vale="eviar">
    </form>
     <?php

	  }
    ?>
</body>
</html>