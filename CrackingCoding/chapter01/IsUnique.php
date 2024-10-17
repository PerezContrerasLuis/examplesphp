<?php

/*
 * Implement an algorithm to determine if a string has all unique characters.
 * What if you cannot use additional data structures?
 */


function validarString($cadena)
{
    $validado = [];
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (array_key_exists($cadena[$i], $validado)) {
            return "la cadena tiene caracteres repetidos";
        } else {
            $validado[$cadena[$i]] = 1;
        }
    }
    return "Cadena unica";
}

$cadena = "abcdfge";
echo validarString($cadena);
echo "\n";