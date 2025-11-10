<?php
function arrayAleatorio(int $tam, int $min, int $max) : array{
    $lista=[];
    while ($tam > 0){
        $lista[] = rand($min, $max);
        $tam--;
    }
    return($lista);
}
$lista=[];
$lista = arrayAleatorio(5, 1,5);
 echo "<pre>";
    print_r($lista);
    echo "</pre>";
?>