<?php
/*
---
title: Ejercicio 5: 
desc:  Ejercicio 5: Filtrar Productos por Precio
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$lista = ["Producto1" =>["Camiseta",15.00],
          "Producto2" =>["Pantalón", 35.00],
          "Producto3"=> ["Zapatos", 50.00],
          "Producto4"=> ["Gorra", 10.00]];
echo"<h1>Tabla de productos</h1>";
echo "<table border='1' >";
echo "<td>Nombre</td>";
echo"<td>Precio</td>";
foreach ($lista as $nombre_producto => [$nombre, $precio,]) {
     echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$precio</td>";
    echo "</tr>";
};
echo"</table>";

echo"<h1>Productos con precio superior a 20 €</h1>";

echo "<table border='1' >";
echo "<td>Nombre</td>";
echo"<td>Precio</td>";
foreach ($lista as $nombre_producto) {
    if($nombre_producto[1] > 20){
        echo "<tr>";
        echo "<td>$nombre_producto[0]</td>";
        echo "<td>$nombre_producto[1]</td>";
        echo "</tr>";
    }
     
}

?>