<?php
/**
 * Implementación básica de Quick Sort en PHP
 *
 * @param array $arr El arreglo (o lista) de elementos a ordenar
 * @return array El arreglo ordenado
 */
function quicksort(array $arr): array {
    // Si el arreglo tiene 0 o 1 elementos, ya está ordenado
    if (count($arr) < 2) {
        return $arr;
    }

    // Elegir el pivote (usaremos el primer elemento del arreglo)
    $pivote = $arr[0];

    // Arreglos para los menores (o iguales) y los mayores
    $menores = [];
    $mayores = [];

    // Recorremos los elementos (excepto el pivote) y los clasificamos
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivote) {
            $menores[] = $arr[$i];
        } else {
            $mayores[] = $arr[$i];
        }
    }

    // Ordenar recursivamente los arreglos menores y mayores
    $menoresOrdenados = quicksort($menores);
    $mayoresOrdenados = quicksort($mayores);

    // Combinar los resultados (menores ordenados + pivote + mayores ordenados)
    return array_merge($menoresOrdenados, [$pivote], $mayoresOrdenados);
}

// Ejemplo de uso
$numeros = [5, 2, 9, 1, 6, 3];
print_r($numeros);
$numerosOrdenados = quicksort($numeros);
print_r($numerosOrdenados);