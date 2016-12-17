<?php 

/*
	1. Lenguaje: PHP 
	El código consiste en un vector de un número aleatorio de elementos numericos, 
	ordenarlos de tal forma que queden en otro vector los números pares,
	y en otro los impares, a demás hallar el promedio de el vector de los pares y los impares,
	luego de todo eso sumar el valor de los vectores de los pares e impares. 
*/

// vector inicial
	$original 	= array('2','16','4','7','6','5','8','18','1','10','9','20','12','14','22','43','3','55',);
    $pares 		= array();
    $impares 	= array();
	//recorremos el array para verificar el valor
    foreach ($original as $valor ) {
    	if($valor % 2 == 0){
          $pares[]= $valor;
    	}else{
    	  $impares[]= $valor;
    	}
    }

   //pintamos los arreglos
   echo "<br/>vector original<br/>";
   pintar($original);

   echo "<br/>vector de numeros pares<br/>";
   pintar($pares);
   echo "el promedio de los numero pares es: ";
   echo  ( suma($pares)/count($pares))."<br/>";
   echo "la suma de los numeros pares es : ".suma($pares)."<br/>";

   echo "<br/>vector de numeros pares<br/>";
   pintar($impares);
   echo "el promedio de los numero inpares es: ";
   echo  ( suma($impares)/count($impares))."<br/>";
   echo "la suma de los numeros inpares es : ". suma($impares);


   //funcion para pintar un vector
   function pintar($vector){
   	echo "[";
   	foreach ($vector as  $value) {
   		echo $value.",";
   	}
   	echo "]<br/>";
   }

   //funcion para realizar suma
   function suma($vector){
    $sumat =0;
    foreach ($vector as $valor ) {
        $sumat = $sumat + $valor;
    }
   	return $sumat;
   }
   

   
?>