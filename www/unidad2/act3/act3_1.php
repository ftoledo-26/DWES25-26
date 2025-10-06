<?php
/*
---
title: Ejercicio 1: 
desc: Mostrar el mayor de 3 numeros
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$numero1 = random_int(1,100);
$numero2 = random_int(1,100);
$numero3 = random_int(1,100);
echo "<h1>Juego: mayor de 3 numeros </h1> <br>";
echo "<ul>
        <li>numero 1: $numero1</li>
        <li>numero 2: $numero2</li>
        <li>numero 3: $numero3</li>
      </ul>
    ";
if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "El número más grande es $numero1";
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "El número más grande es $numero2";
} else {
    echo "El número más grande es $numero3";
}
?>
