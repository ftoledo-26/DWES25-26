<?php
/*
---
title:  Ejercicio 1: Uso de sesiones para votaciones 
desc: Implementa un sistema de votación simple utilizando sesiones para almacenar los votos. Muestra los resultados con barras de progreso.
tags: [votación, sesiones, progreso]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
session_start();
if (!isset($_SESSION["VotarA"]) && !isset($_SESSION['VotarB'])) {
    $_SESSION["VotarA"] = 0;
    $_SESSION['VotarB'] = 0;
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
        <form action="votar.php" method="POST" class="grid">
            <button type="submit" name="boton" value="A">Votar A</button>
            <button type="submit" name="boton" value="B">Votar B</button>
            <button type="submit" name="boton" value="0">Poner a cero</button>
        </form>
       <?php if(isset($_SESSION['VotarA']) && isset($_SESSION['VotarB'])): ?>
            <p><Strong>Votos A:</Strong><?=$_SESSION['VotarA'];?> --------- 
            <Strong>Votos B:</Strong><?=$_SESSION['VotarB']; ?> </p>
            <meter value="<?= $_SESSION['VotarA'] ?>" min="0", max="20"style="width: 700px; height:25px;"></meter>
            <br>
            <meter value="<?= $_SESSION['VotarB'] ?>" min="0", max="20"style="width: 700px; height:25px;"></meter>
       <?php else: ?>
            <p><Strong>Votos A:</Strong> 0 --------- 
            <Strong>Votos B:</Strong> 0 </p>
            <meter value="0" min="0", max="20"style="width: 700px; height:25px;"></meter>
            <br>
            <meter value="0" min="0", max="20"style="width: 700px; height:25px;"></meter>
        <?php endif ?>
    </main>
</body>
</html>