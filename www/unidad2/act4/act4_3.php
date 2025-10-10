<?php
/*
---
title: Ejercicio 3: 
desc: Ejercicio 3: Conteo de Sexo Aleatorio
tags: [PHP, array,array_push,random_int,array_count_values]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
$lista=[];
echo "<table border='1' >";
echo "<td>#</td>";
echo "<td>sexo</td>";
for($i=0;$i < 5; $i++){
    $numero = random_int(1,2);
    $numero % 2 == 0 ? array_push($lista, "F") :array_push($lista, "M");
}
for ($i=0; $i < count($lista); $i++) { 
    echo "<tr>";
    echo "<td>".$i +1 ."</td>";
    echo "<td>".$lista[$i]."</td>";
    echo "</tr>";
}
echo"</table>";
$resultado  = array_count_values($lista);
print_r($resultado);
?>