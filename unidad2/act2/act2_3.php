<?php
/*
---
title: Ejercicio 3: 
desc: Mostrar por pantalla si un número es positivo, negativo o cero
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$numero = random_int(-10, 10); 
echo $numero . "<br>";
echo ($numero <=> 0) === 0
    ? "El numero es cero" :
    (($numero <=> 0) === 1 ? "el numero es positivo" :
                             "el numero es negativo");
?>