<?php
session_start();

if (!isset($_SESSION['inicio'])) {
    $_SESSION['inicio'] = false;
}
elseif (isset($_POST['email']) && isset($_POST['Contraseña'])) {
    $email = $_POST['email'];
    $contr = $_POST['Contraseña'];

    if ($email == 'correo@falso.com' && $contr == '123') {
        $_SESSION['inicio'] = true;
    } else {
        header("Location: act3_2.php");
        exit();
    }
}
elseif ($_SESSION['inicio'] !== true) {
    header("Location: act3_2.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <p style="color: red;" >¡Te encuentras en una zona secreta!, solo visible por una persona identificada.</p>
        <p><a href="cerrar_sesion.php">cerrar_sesion</a></p>
    </main>
</body>
</html>