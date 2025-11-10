<?php
/*
---
title:  Ejercicio 1: Formulario Web y Cookies
desc: Modifica el color de fondo de una página web usando un formulario y cookies.
tags: [formulario, cookies]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$color = 'white';
if (isset($_POST['color'])) {
    echo $_POST['color'];
    $color = $_POST['color'];
    setcookie('micookie', $_POST['color'], time()+3600*24);
}
elseif (isset($_COOKIE['micookie'])) {
    $color = $_COOKIE['micookie'];
}
print $color;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
        
</head>

<?php
    echo '<body style="background-color:'. $color.' ;>';
?>

    <main class="container">
        <form method="post">
        <h1>Selecciona un color de fondo</h1>
        <select name="color">
            <option value="white">blanco</option>
            <option value="red">rojo</option>
            <option value="green">verde</option>
            <option value="black">negro</option>
        </select>
        <button type="submit">Enviar</button>

    </form>
    </main>
    
</body>
</html>