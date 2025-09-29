<?php
/*
---
title: Ejercicio 6: 
desc: Corregir los tipos de las variables
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
// a)
$host = "localhost";     
$puerto = "3306";        
$usuario = "root";       
$clave = null;           
$debug = "true";         

// b) 
echo "<h2>Valores originales:</h2>";
print_r([
    'host' => $host,
    'puerto' => $puerto,
    'usuario' => $usuario,
    'clave' => $clave,
    'debug' => $debug
]);

// c) 
echo "<h2>Tipos originales:</h2><pre>";
var_dump($host, $puerto, $usuario, $clave, $debug);
echo "</pre>";

// d) 
settype($puerto, "integer");
settype($debug, "boolean");
$clave = $clave ?? "";     

// e) 
echo "<h2>Después de la corrección de tipos:</h2> <pre>";
var_dump($host, $puerto, $usuario, $clave, $debug);
echo "</pre>";

?>
