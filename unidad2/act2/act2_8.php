<?php
/*
---
title: Ejercicio 8: 
desc: Comparar dos precios usando el operador nave espacial
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$precio1 = 25;
$precio2 = 30;
echo $precio1 <=> $precio2 . "<br>";
if (($precio1 <=> $precio2) === 1) 
    echo "El precio 1 es mayor que el precio 2";
else if(($precio1 <=> $precio2) === -1)
    echo "El precio 1 es menor o igual que el precio 2";
else
    echo "Los precios son iguales";


?>