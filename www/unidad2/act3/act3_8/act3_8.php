<?php
/*
---
title: Ejercicio 8: 
desc: Dados al azar detectando el menor
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$num = random_int(1,6);
$temp = null;
echo "<div>";
while($num > 0){
    $num_temp = random_int(1,6);
    if ($temp === null || $num_temp < $temp) {
        $temp = $num_temp;
    }
     echo "<img src='image/$num_temp.svg' alt='Dado $num_temp' width='180'>";
    $num--;
}
echo"</div>";
echo"El numero mas pequeño es $temp";

?>