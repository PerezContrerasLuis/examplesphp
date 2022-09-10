<?php


class Persona
{

 private $nombre;

 public function __construct($nombre){

 	$this->nombre=$nombre;
 }

 public function __toString(){
 	return $this->nombre;
 }


}


?>