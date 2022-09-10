<?php

require_once 'Empresa.php';
require_once 'Persona.php';
require_once 'Respuesta.php';

abstract class Index
{
	static function run()
	{       
                $empresa = new Empresa();
                $persona = new Persona("masculino");

                //asignamos encuesta dependiendo del sexo
                $sexo = $persona->getSexo();
                $encuesta =$empresa->getEncuesta($sexo);

                $persona->setEncuesta($encuesta);
                $preguntas= $encuesta->getPreguntas();

                //respondiendo preguntas de encuesta
                foreach ($preguntas as $pregunta ) {
                	
                	//echo $pregunta."<br />";
                	$persona->addRespuesta(new Respuesta($pregunta,'si'));
                } 

                /* en este ejemplo solo es una persona, en un contexto  real existen mas de 1 persona
                solamente tiene que recorrer todas las personas encuestadas ^_^ , bueno aclarado lo 
                anterior y para que no me apedren en la calle jaja , Continuo*/

                echo $persona->getResumenPreguntasRespondidas();

               


	}
}

Index::run();

?>