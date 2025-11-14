<?php
require_once "config.php";
require_once("modelo/curso_modelo.php");
require_once("modelo/estudiante_modelo.php");
require_once("controlador/instituto_controlador.php");
require_once("vista/vista_instituto.php");

    try {
        $mbd = new PDO(DB_DSN, DB_USER, DB_PASS);
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Conexión exitosa a la base de datos.';
        $est = new estudiante_modelo($mbd);
        $curso = new curso_modelo($mbd);
        $cont = new instituto_controlador($est, $curso);
        
        $data = $cont->ejecutar();
        mostrar($data);
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
?>