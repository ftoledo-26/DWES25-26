<?php
/*
---
title: Ejercicio 5: 
desc: Ejercicio 5: Conteo de Sexo Aleatorio
tags: [PHP, array,array_push,random_int,array_count_values]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$productos = array(
    "Pan" => ["precio" => 1, "iva" => 1],
    "Televisor" => ["precio" => 500, "iva" => 4],
    "Libro" => ["precio" => 25, "iva" => 2],
    "Pan" => ["precio" => 1.20, "iva" => 1],
    "Medicamento" => ["precio" => 15.00, "iva" => 1],
    "Zapatos" => ["precio" => 60.00, "iva" => 4],
    "Revista" => ["precio" => 5.00, "iva" => 2],
    "Agua" => ["precio" => 0.80, "iva" => 3],
    "Portátil" => ["precio" => 900.00, "iva" => 4],
    "Silla" => ["precio" => 45.00, "iva" => 4]
);

$tipos = array(
    1 => 0.00,  
    2 => 0.04,  
    3 => 0.10,  
    4 => 0.21   
);
echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Sin IVA</th><th>Tipo</th><th>Con IVA</th></tr>";

foreach($productos as $nombre => $datos){
    $precioSinIva = $datos["precio"];
    $tipoIva = $datos["iva"];
    $porcentajeIva = $tipos[$tipoIva];
    $precioConIva = $precioSinIva * (1 + $porcentajeIva);
    
    echo "<tr>";
    echo "<td>$nombre</td>";
    printf ("<td>%.2f</td>", $precioSinIva);
    echo "<td>$tipoIva</td>";
    printf ("<td>%.2f</td>", $precioConIva);
    echo "</tr>";
}

echo "</table>";
?>
