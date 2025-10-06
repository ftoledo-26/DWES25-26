<?php
/*
---
title: Ejercicio 7: 
desc: Pareja de dados
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$numero = random_int(1,6);
$numer2 = random_int(1,6);
echo
"<div>
        <img src="."image/$numero.svg"." alt=".">
        <img src="."image/$numer2.svg"." alt=".">
    </div>";
    echo $numero == $numer2 ? "<h2>Pareja de $numero </h2>" :
                              "<h2>No has sacado pareja</h2>"

?>