<?php

/*
*  1.5 A una modificación:
* Hay tres tipos de modificaciones que se pueden realizar en cadenas: insertar un carácter, eliminar un carácter o reemplazar un carácter.
* Dadas dos cadenas, escribe una función para comprobar si están a una sola modificación (o ninguna) de distancia.
* 
* EJEMPLO
* pale, ple → true
* pales, pale → true
* pale, bale → true
* pale, bae → false
*/

class OneAwayChecker 
{
    public static function isOneOrZeroAway ($strUno, $strDos)
    {
        //obtenemos la longitud de las dos cadenas 
        $length1 = strlen($strUno);        
        $length2 = strlen($strDos);        

        //verificamos diferencia, si el valor es mayor a uno significa que esta a mas de un cambio
        if ( abs($length1-$length2) > 1) {
            return false;
        }

        //verificamos letra por letra para verificar si hay mas de una letra distinta
        if ($length1 == $length2) {
            $diffCount = 0;
            for ($i = 0; $i < $length1; $i++) {
                if ($strUno[$i] !== $strDos[$i] ) {
                    if (++ $diffCount > 1) {
                        return false;
                    }
                    
                }
            }
        } else {
            //identificamos que cadena es la mas larga 
             if ($length1 > $length2) {
                $longer = $strUno;
                $shorter = $strDos;
                $longerLength = $length1;
                $shorterLength = $length2;
            } else {
                $longer = $strDos;
                $shorter = $strUno;
                $longerLength = $length2;
                $shorterLength = $length1;
            }
            $diffCount = 0;
            for ($i=0, $j=0; $i<$longerLength && $j<$shorterLength; $i++, $j++) {
                $char1 = $longer[$i];
                $char2 = $shorter[$j];
                if ($char1 === $char2) {
                    continue;
                }
                if (++$diffCount > 1) {
                    return false;
                }
                $i++; // advance the cursor on the longer string an extra step because we found a diff
            }
        }
        return true;

    }
}


echo OneAwayChecker::isOneOrZeroAway('pale', 'ple');
echo "\n";
echo OneAwayChecker::isOneOrZeroAway('pales', 'pale');
echo "\n";
echo OneAwayChecker::isOneOrZeroAway('pale', 'bale');
echo "\n";
echo OneAwayChecker::isOneOrZeroAway('pale', 'bae');
echo "\n";
echo OneAwayChecker::isOneOrZeroAway('luis', 'perez');
echo "\n";


/*
* pale, ple → true
* pales, pale → true
* pale, bale → true
* pale, bae → false
*/