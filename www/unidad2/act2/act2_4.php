<?php
/*
---
title: Ejercicio 4: 
desc: Comprobar si un cliente es VIP o no
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$saldo = "1000";
$ingreso = 250;


$saldo = (int)$saldo;
//Usamos un operador ternario para evaluar si el cliente es VIP o no
echo ($saldo + $ingreso > 1200) ? "Cliente VIP" : "Cliente Normal";

?>

