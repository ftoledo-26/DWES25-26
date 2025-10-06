<?php
/*
---
title: Ejercicio 3: Datos Personales
desc: Mostrar por pantalla una tabla con datos personales
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
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        //variables 
        $nombre = "Francisco Manuel";
        $correo= "ftolper633@g.educaand.es";
        $primerApellido = "Toledo";
        $segundAopellido= "Pérez";

        echo "<table border="."1"." cellpadding="."10".">
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td>$nombre</td>
                </tr>
                <tr>
                    <td><strong>Primer apellido</strong></td>
                    <td>$primerApellido</td>
                </tr>
                <tr>
                    <td><strong>Segundo apellido</strong></td>
                    <td>$segundAopellido</td>
                </tr>
                <tr>
                    <td><strong>email</strong></td>
                    <td>$correo</td>
                </tr>
            </table>"
    ?>
</body>
</html>
