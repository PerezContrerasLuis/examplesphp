<?php

 class Arreglos
{   
    private $arreglo= array();
    
    public function __construct(array $arr =array())
    {
        
        $this->arreglo=$arr;
        
    }
    
    public function printArr()
    {   
        
         //print_r($this->arreglo);
        
        foreach($this->arreglo as $num ){
            
            echo "\t".$num;
        }
        
        echo "<br />";
    }
     
     
     public function definirTabla($numero)
     {
         foreach($this->arreglo as $num ){
             
            $this->arreglo[$num]=$num*$numero;
         }
     }

}



?>