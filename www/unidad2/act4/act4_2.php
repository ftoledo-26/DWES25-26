<?php
/*
---
title: Ejercicio 2: 
desc: tabla de multiplicar de un numero
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$lista = array("fede" => [193, "fede@correo.com"], "Ana"=> [165, "ana@correo.com"],
                 "Luis" => [172, "luis@correo.com"]);
echo "<table border='1' >";
echo "<td>nombre</td>";
echo"<td>altura</td>";
echo "<td style='width: 100px; text-align: center;'>Email</td>";   
foreach ($lista as $nombre => [$altura, $correo]) {
     echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$altura</td>";
    echo "<td>$$correo</td>";
    echo "</tr>";
}
echo"</table>";
?>