<?php
/*
---
title: Ejercicio 1: 
desc: Lista de array relacional con nombre y altura
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$lista  = array("Ana" => 165, "Luis" => 172, "Marta" => 158);
$nombreAlt = " ";
echo "<table border='1' >";
echo "<td>nombre</td>";
echo"<td>altura</td>";
$media = 0 ;
$altMax = 0;
foreach($lista as $nombre => $altura){
    if($altMax < $altura){
        $altMax = $altura;
        $nombreAlt = $nombre;
    }
    $media += $altura;
    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$altura</td>";
    echo "</tr>";
}
    echo "<tr>";
    echo "<td>media</td>";
    echo "<td>".$media/count($lista)."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Mas alto</td>";
    echo "<td>$nombreAlt</td>";
    echo "</tr>";
echo "</table>"

?>