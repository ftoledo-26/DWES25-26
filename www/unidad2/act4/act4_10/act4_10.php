<?php
$cantidad = random_int(2,7);
$lista = [];

for($i = 0; $i < $cantidad; $i++){
    $lista[] = rand(1,6);
}
echo"Tirada Normal";
echo "<div>";
for ($i=0; $i < $cantidad ; $i++) { 
    echo"<img src="."image/$lista[$i].svg"." alt=".">";
}
echo "</div>";
sort($lista);
echo"Tirada Ordenada";
echo "<div>";
for ($i=0; $i < $cantidad ; $i++) { 
    echo"<img src="."image/$lista[$i].svg"." alt=".">";
}
echo "</div>";

?>