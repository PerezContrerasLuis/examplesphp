<?php 

echo "ejmeplo de xml: <br/><br/>";

$xml = simplexml_load_file('uno.xml');

//obtenemos los valores de cada nodo 
foreach ($xml->nodo_hijo as $nodo ) {
	echo $nodo->valor."<br/>";
}

//obtenemos el numero de nodos 
 echo "Enumero de nodos de nodo hijo es ".count($xml->nodo_hijo);

?>