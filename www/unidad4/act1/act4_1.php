<?php
include "./app/models/Cliente.php";
include_once "./app/models/ProductoFisico.php";
include_once "./app/models/ProductoDigital.php";
include_once "./app/models/Pedido.php";

$c = new Cliente("paca","paca@gmail.com");
$c1 = new Cliente('paconi', 'apapaa@papap.com');
$prod1 = new ProductoFisico(10,'TV123', 45);
$prod2 = new ProductoDigital(10,'Ebok234', 45);
$prod3 = new ProductoDigital(5,'Png', 45);
$prod4 = new ProductoDigital(5,'MP3', 12);
$pedido = new Pedido($c);
$pedido->agregarProducto($prod1);
$pedido->agregarProducto($prod2);
$pedido->agregarProducto($prod3);
$pedido->agregarProducto($prod4);
$pedido->mostrarDetalles();
$pedido2 = new Pedido($c1);
$prod1 = new ProductoFisico(10,'TV123', 45);
$prod2 = new ProductoDigital(10,'Ebok234', 45);
$prod3 = new ProductoDigital(5,'Png', 45);
$prod4 = new ProductoDigital(5,'MP3', 12);
echo"<br><br>";
$pedido2->agregarProducto($prod1);
$pedido2->agregarProducto($prod2);
$pedido2->agregarProducto($prod3);
$pedido2->agregarProducto($prod4);
$pedido2->mostrarDetalles();

?>