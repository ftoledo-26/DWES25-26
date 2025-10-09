<?php
/*
---
title: Ejercicio 10: 
desc: Ejercicio 10: Tirada y Ordenación de Dados
tags: [PHP, array,array_push,random_int,array_count_values]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$cantidad = random_int(2,7);
$lista = [];

for($i = 0; $i < $cantidad; $i++){
    $lista[] = rand(1,6);
}
echo"Tirada Normal";
echo "<div>";
for ($i=0; $i < $cantidad ; $i++) { 
    echo"<img src="."image/$lista[$i].svg"." alt=".">";
}
echo "</div>";
sort($lista);
echo"Tirada Ordenada";
echo "<div>";
for ($i=0; $i < $cantidad ; $i++) { 
    echo"<img src="."image/$lista[$i].svg"." alt=".">";
}
echo "</div>";

?>