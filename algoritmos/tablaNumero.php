<?php 
/*
* Algoritmo que pinta la tabla de un numero especifico
* se permite definir el numero y hasta que multiplo se quiere
*/

?>
 <form method="POST" action="#">
 	<label>Numero a multiplicar</label>
 	<input type="text"  name="numerouno">
 	<br/>
 	<br/>
 	<label>Longitud de la tabla</label>
 	<input type="text"  name="numerodos">
 	<br/>
 	<input type="submit" value="mostrar">
 </form>
<?php

 if(isset($_POST['numerouno']) && isset($_POST['numerodos']) && !empty($_POST['numerouno']) && !empty($_POST['numerodos'])){

 	$numero = $_POST['numerouno'];

 	$longitud = $_POST['numerodos'];

 	for ($i=1; $i <= $longitud ; $i++) { 
 		
 		echo " ".$numero*$i."<br/>";
 	}
 }

?>