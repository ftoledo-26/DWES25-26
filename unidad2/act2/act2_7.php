<?php
/*
---
title: Ejercicio 7: 
desc: Mostrar por pantalla una tabla con datos personales
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

?>

<?php
$usuario = $_POST['usuario'] ?? null; // definimos la variable usuario con el valor del formulario o null si no existe
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio7</title>
</head>
<body>

<form method="post" action="">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <input type="submit" value="Enviar">
</form>

<?php
echo ($usuario ?? null) === null || $usuario === '' //Comprobamos que el usuario no sea nulo 
    ? "Debes introducir un usuario"                 //con un operador ternario
    : "Bienvenido $usuario";
?>

</body>
</html>
