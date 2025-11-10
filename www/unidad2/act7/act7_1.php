<?php
function esPar(int $num) : bool{
    return($num % 2 == 0);
}
$numero = 5;
echo json_encode(esPar($numero));//false
echo json_encode(esPar($numero +1));//true
?>