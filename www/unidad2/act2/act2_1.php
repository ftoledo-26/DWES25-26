<?php
/*
---
title: Ejercicio 1: 
desc: Operadores de comparación
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/



$a = 1;

var_dump("2" == $a);      // false estamos comparando un string con un int
var_dump($a == false);    // false $a no es igual a 0 o false
var_dump($a == 2);        // false $a no es igual a 2 pero si fuera === seria true por el tipo
var_dump(--$a == false);  // true  - $a ahora es 0 si es false
//le quitamos 1 a $a lo que pasa a 0
?>