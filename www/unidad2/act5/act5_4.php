<?php
$campos_obligatorios = ['nombre', 'email', 'edad', 'telefono'];
$campos_enviados = ['nombre' => 'Ana', 'edad' => 25];
$campos_faltantes = array_diff($campos_obligatorios, array_keys($campos_enviados));

echo "<h2>Validación de formulario</h2>";

echo "<h3>Campos obligatorios</h3>";
echo "<table border='1'>";
echo "<tr><th>Campo</th></tr>";
foreach ($campos_obligatorios as $campo) {
    echo "<tr><td>$campo</td></tr>";
}
echo "</table>";

echo "<h3>Campos enviados por el usuario</h3>";
echo "<table border='1'>";
echo "<tr><th>Campo</th><th>Valor</th></tr>";
foreach ($campos_enviados as $campo => $valor) {
    echo "<tr><td>$campo</td><td>$valor</td></tr>";
}
echo "</table>";

echo "<h3>Campos faltantes</h3>";
echo "<table border='1'>";
echo "<tr><th>Campo</th></tr>";
foreach ($campos_faltantes as $campo) {
    echo "<tr><td>$campo</td></tr>";
}
echo "</table>";
?>   