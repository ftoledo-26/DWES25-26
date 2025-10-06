<?php
/*
---
title: Ejercicio 2: Media Aritmetica
desc: Media aritmetica entre 2 numeros aleatorios
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    echo"<link rel="."stylesheet"." href="."https://fontlibrary.org//face/libre-baskerville"." type="."text/css"."/>";
    $num1 = random_int(0,100);//numero aleatorio 1 
    $num2 =($num1 + random_int(0,100))/2;//numero aleatorio 2

    echo '<h1 style="color: orange; font-family: \'Libre Baskerville\';">La Media Aritmetica es: '.$num2.' </h1>';

?>
</body>
</html>
