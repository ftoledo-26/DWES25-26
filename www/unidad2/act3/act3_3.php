<?php
/*
---
title: Ejercicio 3: 
desc: Traductor de numeros
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$numero = random_int(0,10);
$nombre_num = match ($numero) {
     0 => "chero",
     1 => "uno",
     2 => "dos",
     3 => "tres",
     4 => "cuatro",
     5 => "cinco",
     6 => "seis",
     7 => "siete",
     8 => "ocho",
     9 => "nueve",
     10  => "diesssss",
     default =>"perrofla que has tocao"
};
$array3 = array('jueves' => 3, 99 => 2);
foreach($array3 as $hola){
     echo "$hola";
}

echo"<h2>El numero generado es $numero y es castellano es $nombre_num</h2>"

?>