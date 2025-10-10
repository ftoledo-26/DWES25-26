<?php
/*
---
title: Ejercicio 9: 
desc:  Ejercicio 9: Búsqueda de Emoji en un Grupo
tags: [PHP, array,array_push,random_int,array_count_values]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$list_num = [];
$cantidad = random_int(5,15);
for($i = 0; $i < $cantidad; $i++){
    $list_num[] = "&#". rand(128512,128580);
}
echo "Grupo:";
foreach ($list_num as $key) {
    echo $key;
}
$cantidad = "&#". rand(128512,128580);
echo array_search($cantidad, $list_num) == true ? "<br>$cantidad <br>si esta en el grupo " : 
"<br>no esta";

?>