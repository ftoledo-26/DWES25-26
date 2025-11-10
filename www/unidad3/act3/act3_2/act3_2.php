<?php
/*
---
title:  Ejercicio 2: Login sencillo con sesiones
desc: Crea un sistema de login básico utilizando sesiones para gestionar el acceso de usuarios. Muestra mensajes de error para credenciales incorrectas.
tags: [login, sesiones, autenticación]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css"> -->
    <link rel="stylesheet" href="pico.min.css"> 
    <title>Document</title>
</head>
<body>
    <main class="container">
        <form action="privado.php" method="post">
            <h1>Acceso al Sistema</h1>
            <p>Email:</p><br>
            <input type="text" name="email" placeholder="Email"><br>
            <p>Contraseña:</p><br>
            <input type="text" name="Contraseña" placeholder="Contraseña">
            <button type="submit">Enviar</button>
        </form>
        <p><strong>📌 Usuario de prueba:</strong> correo@falso.com</p><br>
        <p><strong>🔑 Contraseña:</strong> 123</p>

        <p><a href="privado.php">Acceso a Zona Privada (Sesión iniciada)</a></p>
    </main>
</body>
</html> 