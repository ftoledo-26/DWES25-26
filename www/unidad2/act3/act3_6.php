<?php
/*
---
title: Ejercicio 6: 
desc: tabla de multiplicar de un numero
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$numero = random_int(1,10); 
echo "<table border='1' >";
echo "<tr><th colspan='5'>Tabla de multiplicar del $numero</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>x</td>";
    echo "<td>$i</td>";
    echo "<td>= $resultado</td>";
    echo "</tr>";
}

echo "</table>";
?>
