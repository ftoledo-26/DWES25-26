<?php
$calcularIva = fn($precio, $iva)  => $precio *(1+$iva);
$num1 = 100;
$num2 = 250;
$num3 =50;
$iva = 0.21;
echo "<h1>El iva es del 21%</h1>";
echo "<h1>Precio final de 100: ".$calcularIva($num1, $iva)."</h1>";
echo "<h1>Precio final de 250: ".$calcularIva($num2, $iva)."</h1>";
echo "<h1>Precio final de 50: ".$calcularIva($num3, $iva)."</h1>";
?>