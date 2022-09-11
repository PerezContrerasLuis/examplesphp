<?php
/**
 * Ejemplos de tabla lineal 
 * Insertar al final : add()
 * insertar a un indeice especifico : insert()
 * Eliminar un indice espeficifo : remove() 
*/
$scores = array(90, 70, 50, 80, 60, 85);

for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . ",";
}
echo "\n";

$testObject = new Arreglo();

$scoresOne = $testObject->add($scores);
print_r($scoresOne);

$scoresTwo = $testObject->insert($scores, 30, 2);
print_r($scoresTwo);

$scoresThre = $testObject->remove($scores, 2);
print_r($scoresThre);

class Arreglo
{

    function add($newArray)
    {
        $newArray[] = 75;
        return  $newArray;
    }


    function insert($array, $score, $index)
    {
        $newArray = array();
        for ($i = 0; $i < count($array); $i++) {
            if ($i === $index) {
                $newArray[] = $score;
            } else {
                $newArray[] = $array[$i];
            }
        }
        return $newArray;
    }

    function remove($array, $index)
    {
        $newArray = array();
        for ($i = 0; $i < count($array); $i++) {
            if ($i != $index) {
                $newArray[] = $array[$i];
            }
        }
        return $newArray;
    }
}
