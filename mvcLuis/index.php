<?php 

/*
 * Script que contiene el controller front end princilpal
*/
 if(!isset($_REQUEST['c'])){
    
    //cargamos vista por default
    include 'controller/ControllerAlumno.php';
    $alumno = new ControllerAlumno();
    $alumno->index();
 }else{
 	//obtenemos la accion que desea realizar 
 }
?>
