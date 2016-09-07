<?php
/*
 * @author: luis perez 
 * @info : Algoritmo que genera la tabla de pitagoras
 *         en funcion del numero de renglones definidos por el usuario
 *         Solucion con 2 arreglos 
 * @date : 30/08/2016
 */
//if que verifica si existe la variable numero de renglones 
//si no existe muestra el formulario para definir el numero de renglones
if(isset($_POST['numero'])){

	//creamos y asignamos la variable con el numero de renglones
	$numeroR = $_POST['numero'];

	//creamos el arreglo actual que contendrá el renglon a pintar en el triangulo
    $actual = array();
	//creamos el arreglo anterior que almacenará el renglon anterior al actual
    $anterior = array(); 

	//for que controla el numero de renglones 
	for ($i=1; $i < ($numeroR+1)  ; $i++) { 

        //for para pintar cada digito correspondiente al renglon actual
		for ($j=0; $j < $i ; $j++) { 
		  
		   /*verificamos si es el primer renglon, si es asi asignamos
		   el numero uno  e inprimimos el registro con un salto de linea */
		  if($i==1){
		  	//esta seccion unicamente se imprime cuando es el primer renglon
		  	$actual[$j] =1;
		  	echo $actual[$j]."<br/>";

		  }elseif($j==0) {
		  	/*Esta seccion imprime siempre el primer digito que siempre es uno
		  	  y siempre será uno cuando J==0  y cuando no sea el primer renglon */
		  	$actual[$j]=1;
		  	echo $actual[$j]."&nbsp";

		  }elseif ($j == ($i-1)) {
		  	/*Esta seccion siempre imprime el ultimo digito , el cual siempre sera 1*/
		  	$actual[$j]=1;
		  	echo $actual[$j]."<br/>";

		  }else{
		  	//en esta seccion se imprimen los digitos que no sean el primero ni el ultimo 
		  	/*Sumanos  del arreglo anterior 
		  	  el cual contiene el renglon anterior respaldado 
		  	   sumamos el valor con la posiscion actual + el valor con la posicion actual menos 1
		  	   para calcular el nuevo valor , lo almacenamos en el arreglo actual con el indice actual y
		  	   lo imprimimos seguido de un espacio*/
	        $actual[$j]= $anterior[$j]+$anterior[$j-1];
	        echo $actual[$j]."&nbsp";
	        
		  }

		}
        /*IMPORTANTE Al "(SALIR)" del for que imprime los digitos del renglon actual
          respaldamos el arreglo actual en el arreglo de nombre anterior, 
          para posteriormente usuarlo y poder hacer la suma que calcule 
          los digitos en el renglon actual*/
		$anterior= $actual;
		//print_r($anterior);


	}
}else{
?>

<html>
<head>
	<title>Pascal</title>
</head>
<body>
	<center>
         <form action="#" method="post">
         	ingrese el numero de renglones
         	<br> 
         	que tendrá el triangulo de pascal 
         	<br/>
         	<input type="text" name="numero">
         	<br/>
         	<input type="submit" value="enviar">
         </form>
	</center>

</body>
</html>
<?php   
 }
?>