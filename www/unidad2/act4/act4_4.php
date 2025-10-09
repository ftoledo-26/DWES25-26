<?php
/*
---
title: Ejercicio 4: 
desc: Ejercicio 4: Conteo de Sexo Aleatorio
tags: [PHP, array,array_push,random_int,array_count_values]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$lista = [];
$total = 0;
for ($i=0; $i < 3 ; $i++) { 
    $num = random_int(0,100);
    $total += $num;
    array_push($lista, $num);
}
$total = $total/3;
list($a ,$b, $c) = $lista;
printf("Los numeros son %d, %d , %d, y su media es  %.2f", $a, $b, $c, $total);

?>