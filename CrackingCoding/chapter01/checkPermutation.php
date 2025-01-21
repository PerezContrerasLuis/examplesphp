<?php
    //Dado dos cadenas, escribe un método para determinar si una es una permutación de la otra.

    function isPermutation($first,$second){

        $f = str_replace(' ','',$first);
        $s = str_replace(' ','',$second);

        //si no tienen la misma longitud automaticamente son distintos
        if(strlen($f) !== strlen($s)){
            return false;
        }

        //creamos un hashMpa que contenga un indice con la letra y como valor el numero de veces que aparece en el string
        $letters = [];
        for($i = 0; $i < strlen($f); $i++){
            $char = $f[$i];
            if(isset($letters[$char])){
                $letters[$char] ++;
            }else{
                $letters[$char] = 1;
            }
        }

        /*Eliminamos del hashMap el conteo de veces comparando con el segundo string,
        * Si la letra no aparece en letters o el inidice con esa letra es menor a cero regresa falso
        */
        for($i=0; $i < strlen($s); $i++){
            $char = $s[$i];
            if(isset($letters[$char])){
                $letters[$char]--;
                if($letters[$char] < 0){
                    return false;
                }
            } else {
                return false;
            }
        }

        return true;
    }


    //caso de prueba

    $string1 = 'hola mundo';
    $string2 = 'hola mundo';

    if (isPermutation($string1,$string2)){
        echo "Si es permutacion \n";
    } else {
        echo "No es permutacion \n";
    }

?>