<?php
/*
---
title: Ejercicio 2: 
desc:switch notas numero randomizados
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
echo"<h1>Simulador de calificacion</h1>";
$numero1 = random_int(0,10);
echo"La nota generada es $numero1";
switch (true) {
    case ($numero1 >= 0 && $numero1 < 5):
        echo "<h2>Calificación: insuficiente</h2>";
        break;
    case ($numero1 >= 5 && $numero1 < 7):
        echo "<h2>Calificación: suficiente</h2>";
        break;
    case ($numero1 >= 7 && $numero1 < 9):
        echo "<h2>Calificación: notable</h2>";
        break;
    case ($numero1 >= 9 && $numero1 <= 10):
        echo "<h2>Calificación: sobresaliente</h2>";
        break;
    default:
        echo "<h2>Calificación no válida</h2>";
}
    

?>