<?php 
 
 class ModelAlumno{
    
    public $con = "";
    public $server = "localhost";
    public $user	= "root";
    public $pass	= "";
    public $db		= "colegio";

 	public function __construct(){
     
     //creamos la conexion
     $this->con = new mysqli($this->server,$this->user,$this->pass,$this->db);

     if($this->con->connect_error){
       die("Connection failed: " .  $this->con->connect_error);
     }else{
     	//echo "conexion is true";
     }

 	}


 	public function getListAlumnos(){

 		$query = "Select * from alumnos";

 		$result = $this->con->query($query);

 		return $result;
 	}
 }


?>