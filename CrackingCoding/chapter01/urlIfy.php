<?php

/*
 * Escribe un método para reemplazar todos los espacios en una cadena con ‘%20’.
 * Puedes asumir que la cadena tiene suficiente espacio al final para contener los
 * caracteres adicionales y que se te proporciona la longitud “real” de la cadena.
 */


function urlify($str)
{
    /*
     * Como la cadena contiene espacios suficientes al final para no tener que usar un nuevo búfer,
     * recorremos la cadena de derecha a izquierda, omitiendo los espacios hasta encontrar la primera letra
     * y almacenamos su posición.
     */
    $length = strlen($str);
    for ($i = $length -1; $i >= 0; $i--) {
        if ($str[$i] !== ' ') {
            break;
        }
    }

    /*
     * El segundo for recorre nuevamente la cadena de derecha a izquierda. Cuando encuentra un espacio,
     *  lo sustituye por los caracteres definidos; cuando es una letra, la almacena en la misma cadena.
     */

    $j = $length -1;
    while ($i >= 0) {
        if ($str[$i] === ' ') {
            $str[$j--] = '0';
            $str[$j--] = '2';
            $str[$j--] = '%';
        } else {
            $str[$j--] = $str[$i];
        }
        $i--;
    }

    return $str;
}



/*
 * Ejemplode caso de uso :
 *
 */

$str      = "Mr John Smith    ";
$expected = "Mr%20John%20Smith";

echo "Expected {$expected}";
echo "\n";
echo  "Result : ";
echo urlify($str);
echo "\n";
