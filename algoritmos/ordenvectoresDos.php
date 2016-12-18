<?php 

 /*
	 hallar el número mayor y el promedio de dos vectores distintos
	 y crear un nuevo vector que contenga los valores de los vectores anteriores,
	 también sacandole su respectivo promedio y el número mayor total 
 */

$vectoruno= array('1','3','5','7','9','10' );
$vectordos= array('2','4','6','8','10','12' );
$vectortres= array();

echo "El primer arreglo<br>";
echo pintar($vectoruno)."<br/>";
echo "El numero mayor de este vector es: ".mayor($vectoruno)."<br/>";
echo "El promedio de este vector es: ".(sumar($vectoruno)/count($vectoruno))."<br/>";

echo "<br/>El segundo arreglo<br>";
echo pintar($vectordos)."<br/>";
echo "El numero mayor de este vector es: ".mayor($vectordos)."<br/>";
echo "El promedio de este vector es: ".(sumar($vectordos)/count($vectordos))."<br/>";

echo "<br/>El tercer arreglo<br>";
$vectortres = unir($vectoruno,$vectordos);
echo pintar($vectortres)."<br/>";
echo "El numero mayor de este vector es: ".mayor($vectortres)."<br/>";
echo "El promedio de este vector es: ".(sumar($vectortres)/count($vectortres))."<br/>";


//funcion para pintar vectores
function pintar($vector){
   echo "[";
   foreach ($vector as $value) {
   	echo " ".$value." ";
   }
   echo "]";
}

//funcio para calcular la suma 
function sumar($vector){
 $suma= 0;
 foreach ($vector as  $value) {
 	$suma = $suma + $value;
 }

 return $suma; 
}

//function para obtener el numero mayor 
function mayor($vector){
	$mayor= 0;
	for ($i=0; $i < count($vector) ; $i++) { 
		if($vector[$i]>$mayor){
			$mayor= $vector[$i];
		}
	}

	return $mayor;
}


//function unir 
function unir($vectoruno, $vectordos){
	$vectorunido= array();

	foreach ($vectoruno as $value) {
		$vectorunido[]=$value;
	}
	foreach ($vectordos as $value) {
		$vectorunido[]=$value;
	}

	return $vectorunido;
}


?>