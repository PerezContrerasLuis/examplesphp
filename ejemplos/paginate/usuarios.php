<?php


//creamos la conexion
$con = new mysqli('localhost','root','','socialpost');

if($con->connect_error){

	die(error);
}

$result= $con->query("SELECT * FROM users");

if($result->num_rows >0){

//obtenemos la pagina actual
$pagina = $_POST['pag'];

//obtenemos el numero total de registros de la tabla
$numreg =  $result->num_rows;

//definimos el numoer de registros por pagina 
$per_pag = 10;

//definimos el numero del cual va a iniciar a pintar registros 
$inicio = ($pagina - 1) * $per_pag;

//definimos la nueva consulta don lis limites definidos
$sql = "SELECT * FROM users  order by id LIMIT $inicio,$per_pag";
$resultdos= $con->query($sql);


echo '<table class="table table-striped">';
echo '<thead>
   		<th>id</th>
   		<th>Nombre</th>
   		<th>Correo</th>
   	</thead>
   	<tbody>';
 while ($row = $resultdos->fetch_assoc()) {
 	echo '<tr class="success"><td>'.$row['id'].'</td> <td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';
 }
echo '</tbody></table>';

//definimos el numero de paginas
$numpaginas= ceil($numreg/$per_pag);

echo '<nav aria-label="Page navigation">
  <ul class="pagination">';
    if($pagina > 1){
    	echo '<li>
      <a href="javascript:paginar('.($pagina-1).')" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>';
    }
    
    for ($i=1; $i <= $numpaginas ; $i++) { 

    	if($i==$pagina){
    		echo'
		    <li  class="active"><a href="javascript:paginar('.$i.')">'.$i.'</a></li>
		    ';
    	}else{
    		echo'
		    <li><a href="javascript:paginar('.$i.')">'.$i.'</a></li>
		    ';
    	}
    	
    }

    if($pagina < $numpaginas ){
    	echo '<li>
			      <a href="javascript:paginar('.($pagina+1).')" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>';
    }

echo'
  </ul>
</nav>';

}

/*echo $pagina;
echo "<br/>";
echo $numreg;*/


?>