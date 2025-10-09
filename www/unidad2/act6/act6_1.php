<?php
/*
---
title: Ejercicio 1: 
desc:  Ejercicio 1: Longitud de comentario (SMS 160)
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
    $frase = $_POST['usuario'] ?? ""; ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <input type="submit" value="Enviar">
</form>
</body>
</html>
<?php

$longi = 160 - strlen($frase);
echo $frase;
echo"<br>longitud: ". strlen($frase)."<br>";
echo ($longi > 0)? "Te quedan ".$longi : "que haces picha te has pasao";


?>