<?php
/*
---
title:  Ejercicio 1: Uso de sesiones para votaciones 
desc: Implementa un sistema de votación simple utilizando sesiones para almacenar los votos. Muestra los resultados con barras de progreso.
tags: [votación, sesiones, progreso]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$host = 'mysql.miserver_db.alwaysdata.net';
$db   = 'nombre_de_la_base';
$user = 'usuario';
$pass = 'contraseña';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
