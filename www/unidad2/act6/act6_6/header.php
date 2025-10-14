<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
    <style>
        nav a {
            margin: 0 10px;
            text-decoration: none;
        }
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $titulo; ?></h1>
        <nav>
            <a href="act5_6.php">Inicio</a>
            <a href="about.php">Acerca de</a>
            <a href="contact.php">Contacto</a>
        </nav>
        <hr>
    </header>