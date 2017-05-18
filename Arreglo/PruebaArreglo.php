<?php

include('Arreglos.php');


 class PruebaArreglo{
    
  public static function run ()
    {
        $numeros = array(1,2,3,4,5,6,7,8,9,10);
      $arr= new Arreglos($numeros);
        
        echo "TABLA DE MULTIPLICAR <br />";
        $arr->printArr();
         $arr->definirTabla(5);
         $arr->printArr();
    }
    
    
}

PruebaArreglo::run();

?>