<?php
require_once "config.php";
require_once("modelo/curso_modelo.php");
$dsn = DB_DSN;
$usuario = DB_USER;
$contraseña = DB_PASS;

    try {
        $mbd = new PDO($dsn, $usuario, $contraseña);
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Conexión exitosa a la base de datos.';

        $curso1 = new curso_modelo($mbd);
        $curso1->agregar("paconi");
        $array = $curso1->todos();
        print_r($array);
        $curso1->variar();
        print_r($array);
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>