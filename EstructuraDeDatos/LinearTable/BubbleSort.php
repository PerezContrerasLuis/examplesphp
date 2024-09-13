<?php

/**
 *  Ordena el arreglo de menor a mayor , definiendo primero el utimo indice n-1 = max value y descartando ese indice para la siguiente iteracion
 * este algoritmo tiene una complejidad de tiempo de O(n²) en el peor caso, por lo que no es muy eficiente para listas grandes, pero es fácil de entender e implementar.
*/

function bubbleSort($array) {
    $n = count($array);  // Tamaño del array
    for ($i = 0; $i < $n - 1; $i++) {
        // Últimos $i elementos ya están ordenados
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Intercambiar si el elemento actual es mayor que el siguiente
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Ejemplo de uso
$miArray = [64, 34, 25, 12, 22, 11, 90];
$arrayOrdenado = bubbleSort($miArray);

echo "Array ordenado: \n";
print_r($arrayOrdenado);
?>
