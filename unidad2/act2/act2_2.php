<?php
/*
---
title: Ejercicio 2: 
desc: Expicacion de operadores aritmeticos
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$a = 5;
$b = 10;
$c = 15;
$d = 20;
$resultado = ++$a * $b / $c + $d++ -$a;
//$a aumenta en 1 y vale 6
//por lo que 6 * 10 = 60
//60 / 15 = 4
//4 + 20 = 24
//$d luego aumenta en 1 y vale 21
//luego se le resta -$a que vale 6
//24 - 6 = 18
echo $resultado;
?>