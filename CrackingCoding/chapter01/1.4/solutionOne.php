<?php

/* Usamos una tabla hash para contar cuántas veces aparece cada carácter. 
*Luego, iteramos a través de la tabla hash y verificamos que no haya más de un carácter con una cantidad impar.
*/

function isPermutationOfPalindrome($phrase)
{
    $table = buildCharFrequencyTable($phrase);
    return checkMaxOneOdd($table);
}

// Verifica que no haya más de un carácter con cantidad impar
function checkMaxOneOdd($table)
{
    $foundOdd = false;
    foreach ($table as $count) {
        if ($count % 2 == 1) {
            if ($foundOdd) {
                return false;
            }
            $foundOdd = true;
        }
    }
    return true;
}

// Mapea cada letra a un número: a -> 0, b -> 1, ..., z -> 25
function getCharNumber($c)
{
    $val = ord(strtolower($c));
    $a = ord('a');
    $z = ord('z');

    if ($val >= $a && $val <= $z) {
        return $val - $a;
    }
    return -1;
}

// Cuenta cuántas veces aparece cada letra
function buildCharFrequencyTable($phrase)
{
    $table = array_fill(0, 26, 0); // 26 letras del alfabeto

    $chars = str_split(strtolower($phrase));
    foreach ($chars as $c) {
        $index = getCharNumber($c);
        if ($index !== -1) {
            $table[$index]++;
        }
    }

    return $table;
}

// Ejemplo de uso
$phrase = "Tact Coa";
$result = isPermutationOfPalindrome($phrase);
echo $result ? "true" : "false"; // Imprime "true"
echo "\n";
