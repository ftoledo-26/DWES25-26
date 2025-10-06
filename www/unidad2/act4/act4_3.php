<?php
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