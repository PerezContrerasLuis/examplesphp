<!-- Ejercicio 4.6: mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los números del
uno 1 al 4 (hacer una función que las calcule invocando la función pow). En PHP las funciones hay
que definirlas antes de invocarlas. Los parámetros se indican con su nombre ($cantidad) si son por
valor y antecedidos de & (&$cantidad) si son por referencia. -->
<html>
<head>
	<title>ejercicio 4.6</title>
</head>
<body>
	<center>
	<?php
	//define($TAM,4);
	function potencia ($v1, $v2)
	{
		$rdo= pow($v1, $v2);
		return $rdo;
	}
	echo "<table border=1>";
	for ($n1=1; $n1<=4; $n1++)
	{
		echo "<tr>";
		for ($n2=1; $n2<=4; $n2++)
			echo "<td>". potencia($n1,$n2). "</td>";
		echo "</tr>";

	}
	echo "</table>";
	?>
	</center>
</body>
</html>