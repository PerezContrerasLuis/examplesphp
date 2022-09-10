<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario con checkbox</title>
</head>
<body>

	<?php 
	  if(isset($_POST['lenjuages'])){
            echo "usted domina los siguientes lenguajes<br/>";
	  	    $lenguajes =$_POST['lenjuages'];
	  	    foreach ($lenguajes as  $value) {
	  	    	echo $value."<br/>";
	  	    }
	  	  
     	  }else{
	  	?>
       <form name="sexo" action="checkbox.php" method="POST">
    	<label>Lenguajes</label>
    	<br/>
    	Java<input type="checkbox" name="lenjuages[]" value="Java" >
    	<br/>
    	PHP<input type="checkbox" name="lenjuages[]" value="php" >
    	<br/>
    	Phyton<input type="checkbox" name="lenjuages[]" value="python" >
    	<br/>
    	<input type="submit" vale="eviar">
    </form>
     <?php

	  }
    ?>
</body>
</html>