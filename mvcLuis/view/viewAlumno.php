<html>
<head>
	<title>Lista de alumnos</title>
</head>
<body>
    <center>
    	<table style="border:solid 1px">
    		<tr>
    			<th>Nombre</th>
    			<th>correo</th>
    		</tr>
    		<?php
               if ($queryR->num_rows > 0) {
				    // output data of each row
				    while($row = $queryR->fetch_assoc()) {
    		?>
    		<tr>
    			<td style="border:solid 1px"><?php echo  $row["Nombre"] ?></td>
    			<td style="border:solid 1px"><?php echo  $row["Correo"] ?> </td>
    		</tr>
    		<?php
				    }
				} else {
				    echo "0 results";
				}
    		?>
    	</table>
    </center>
</body>
</html>