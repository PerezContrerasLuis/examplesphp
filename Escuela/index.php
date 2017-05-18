<?php

include("Persona.php");
include("Escuela.php");

 class Index 
{
  public function ejecutar(){
    
    //creamos escuela
    $escuela = new Escuela("Benito Juarez");

    
    //creamos personas 

    $luis = new Persona("Luis Perez");

    $juan = new Persona("Juan xman");


    //agregamos alumnos
    $escuela->addAlumno($luis);

    $escuela->addAlumno($juan);

    echo $escuela;
    


  }
}

Index::ejecutar();


?>