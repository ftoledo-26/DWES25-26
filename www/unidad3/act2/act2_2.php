<?php
/*
---
title:  Ejercicio 2: Formulario Web y Cookies
desc: Modifica el color de fondo de una página web usando un formulario y cookies.
tags: [formulario, cookies]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$cookieStat = false;

if (isset($_POST['cookie'])) {
    $cookieStat = true;
    setcookie('stadopage', '1', time() + 3600 * 24); // 1 día
}
elseif (isset($_POST['borrado'])) {
    setcookie('stadopage', '', time() - 3600); 
}
elseif (isset($_COOKIE['stadopage'])) {
    $cookieStat = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Política de Cookies</title>
</head>
<body>
<main class="container">
    <div>
        <h1>Bienvenido</h1>
        <p>Contenido de tu página principal...</p>
    </div>

    <?php if (!$cookieStat): ?>
        <form method="POST">
            <div>
                <br>
                <p><strong>Política de Cookies</strong></p>
                <p>Usamos cookies para mejorar tu experiencia. 
                    Al continuar aceptas nuestra 
                    <a href="act2_2.php" target="_blank">Política de Cookies.</a>
                </p>
                <button type="submit" name="cookie">Aceptar Cookies</button>
            </div>
        </form>
    <?php else: ?>
        <form method="POST">
            <button type="submit" name="borrado" value="1">🧹 Borrar cookies</button>
        </form>
    <?php endif; ?>
</main>
</body>
</html>
