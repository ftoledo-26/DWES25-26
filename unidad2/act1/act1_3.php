<?php
/*
---
title: Ejercicio 3: Datos Personales
desc: Mostrar por pantalla una tabla con datos personales
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

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