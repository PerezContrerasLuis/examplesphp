<?php
/**
 * Realiza una búsqueda binaria en un arreglo ordenado.
 *
 * La búsqueda binaria es un algoritmo eficiente para encontrar un elemento en un arreglo ordenado.
 * Se llama "binaria" o "de dicotomía" porque, en cada paso, 
 * divide el conjunto en dos partes iguales (dos "dichotomies") 
 * y descarta la mitad en la que no puede estar el elemento que se está buscando. 
 * Es un enfoque de "divide y vencerás".
 *
 * @param int[] $array El arreglo ordenado en el que se buscará el elemento.
 * @param int $elemento El valor que se está buscando en el arreglo.
 * @return int Devuelve el índice del elemento si se encuentra, o -1 si no se encuentra.
 */
function busquedaBinaria($array, $elemento) {
    $inicio = 0;
    $fin = count($array) - 1;

    while ($inicio <= $fin) {
        $medio = intdiv($inicio + $fin, 2); // Encuentra el índice medio
        
        if ($array[$medio] == $elemento) {
            return $medio;  // Elemento encontrado
        }
        elseif ($array[$medio] < $elemento) {
            $inicio = $medio + 1;  // Buscar en la mitad derecha
        }
        else {
            $fin = $medio - 1;  // Buscar en la mitad izquierda
        }
        
    }

    return -1;  // Elemento no encontrado
}

// Ejemplo de uso
$miArray = [2, 4, 7, 10, 14, 19, 23, 30];
$elementoBuscado = 7;

$resultado = busquedaBinaria($miArray, $elementoBuscado);

if ($resultado != -1) {
    echo "Elemento encontrado en el índice: " . $resultado;
} else {
    echo "Elemento no encontrado.";
}
?>
