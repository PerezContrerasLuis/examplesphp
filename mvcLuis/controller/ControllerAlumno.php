<?php 

include '/models/ModelAlumno.php';

 class ControllerAlumno{
   
   public function __construct(){

   }

   public function index(){

   	$modelo = new ModelAlumno();
   	$queryR = $modelo-> getListAlumnos();
   	include '/view/viewAlumno.php';
   }
}

?>