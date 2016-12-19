<?php

/*
 * algoritmo para dibujar el triangulo de pascal
 * El programa permite definir el numero de  filas que 
 * contendra el triangulo.
 *
 */

 if(isset($_POST['numero']) && !empty($_POST['numero'])){
    
    //obtenemos el numero
    $numero= $_POST['numero'];

    //creamos arreglos
    	//arreglo que contendra los valores de la fila anterior
    	$anterior = array();

    	//arreglo que contiene los valores de la fila actual
    	$actual   = array();
    echo "<div style='text-align:center'>";
    //creamos ciclo para pintar cada uno de los regnlonesque conforman el triangulo
    for ($i=1; $i <=$numero ; $i++) { 
 
    	//cramos ciclo que pinta cada una de los numeros que conformman la fila actual
    	for ($j=0; $j <$i ; $j++) { 

    		if($i==1){
    			//if que pinta la primera FILA
    			$actual[$j]= "1";
    			echo $actual[$j]=1;
    		}elseif ($j==0) {
    		    //if que pinta el primer digito  apartir de la segunda fila en adelante
    		    $actual[$j]=1;
    		    echo $actual[$j];
    		}elseif ($j==($i-1)) {
    			//if que pinta el ultimo digito apartir de la segunda fila en adelante 
    			$actual[$j]=1;
    			echo $actual[$j];
    		}else{
    			
    			$actual[$j]= $anterior[$j]+$anterior[$j-1];
    			echo $actual[$j];
    		}

    	}


        //asignamos arreglos 
        $anterior =$actual;
    	echo "<br/>";

    }
    echo "<div/>";

 }else{
  
 ?>
  <div style="margin:auto;  width:500px">
	  <form action="#" method="POST">
	  	<label>Defina el numero de renglones</label>
	  	<input type="text" name="numero"/>
	  	<br/>
	  	<input type="submit" value="enviar"/>
	  </form>
  </div>
 <?php 
 }

 ?>