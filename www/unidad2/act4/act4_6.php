<?php
/*
---
title: Ejercicio 6: 
desc:  Ejercicio 6: Rotación de un Array
tags: [PHP, array,array_push,random_int,array_count_values]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
    $lista = [];
    for ($i=0; $i < 10 ; $i++) { 
        array_push($lista, random_int(0,100));
    }
    echo"<h1>original: ";
    for ($i=0; $i < count($lista) ; $i++) { 
        echo $lista[$i]. "  ";
    }
    echo"<br></h1>";
    $last = array_pop($lista);
    array_unshift($lista, $last);
    echo"<h1>Rotado: ";
    for ($i=0; $i < count($lista) ; $i++) { 
        echo $lista[$i]. "  ";
    }
?>