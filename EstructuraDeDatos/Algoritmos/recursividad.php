<?php


/**
 * @param $numero
 * @return int|null
 */
function factorial($numero)
{
    if($numero < 0){
        return null;
    }
    if ($numero == 1 || $numero == 0) {
        return 1;
    } else {
        $resultado = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

}


/**
 * @param $numero
 * @return int\null
 */
function factorialRecursivo($numero)
{
    if($numero < 0){
        return null;
    }
    if($numero == 1 || $numero == 0){
        return 1;
    } else {
        return $numero * factorialRecursivo($numero -1);
    }
}

echo factorial(6);
echo "\n";
echo factorialRecursivo(5);

?>