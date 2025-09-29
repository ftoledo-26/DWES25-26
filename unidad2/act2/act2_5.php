<?php
/*
---
title: Ejercicio 5: 
desc: Explicar el resultado de la siguiente expresión
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$resultado = (3 + 5) * 2 < 20 && 4 === "4" || 7 % 2 == 1;
//primera parte
//(3 + 5) * 2 < 20 ==== 16 < 20 === true
//segunda parte
//4 === "4" === false
//7 % 2 == 1 ==== true
//entonces tenemos true && false || true
//true && false === false 
//false || true === true
echo var_dump($resultado);
?>
