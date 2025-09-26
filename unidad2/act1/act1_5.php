<?php

/*
---
title: Ejercicio 5: Dados al azar
desc: Mostrar por pantalla dos dados al azar
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$numero = random_int(1,6);
$numer2 = random_int(1,6);
echo
"<div>
        <img src="."../../assets/image/$numero.svg"." alt=".">
         <img src="."../../assets/image/$numer2.svg"." alt=".">
    </div>
        <h1>Total puntos:". $numero + $numer2."</h1>";
?>