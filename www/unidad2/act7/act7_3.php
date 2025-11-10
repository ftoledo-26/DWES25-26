<?php
function arrayMayores(array &$array) : array {
    for($i =0; $i < count($array); $i++){
        if($array[$i] < 10)
            unset($array[$i]);
    }
    return $array;
}

$lista = [11, 4, 5 ,76,40];
echo "<h1>Array Original</h1><pre>";
    print_r($lista);
echo "</pre>";
arrayMayores($lista);
echo "<h1>Array Modificado</h1><pre>";
    print_r($lista);
echo "</pre>";


?>