<?php

require_once 'Persona.php';

class Escuela
{
	private $nombre;
	private $alumnos = array();

	public function __construct($nombre){

          $this->nombre=$nombre;
	}

	public function addAlumno(Persona $persona){

		$this->alumnos[]=$persona;

	}

	public function __toString(){

		$alumnado="";

		foreach ($this->alumnos as $alumno) {
          
          $alumnado.=$alumno."<br />";			
		}

		return $alumnado;

	}
}


?>