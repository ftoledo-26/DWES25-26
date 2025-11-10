<?php
function division($dividendo, $divisor = 4): float|string {
    if ($divisor == 0) {
        return "Error: División por cero";
    }
    return $dividendo / $divisor;
}

// Ejemplos de uso
$resultado1 = division(3, 4); 
$resultado2 = division(6, 0);  
$resultado3 = division(6);     

// Mostrar resultados
echo "<h1>La división de 3 entre 4 es:<span style='color:blue;'> $resultado1 </span>";
echo "<br>";
echo "La división de 6 entre 0 es:<span style='color:blue;'> $resultado2</span>";
echo "<br>";
echo "La división de 6 entre 4 (valor por defecto) es:<span style='color:blue;'> $resultado3 </span> </h1>";
?>
