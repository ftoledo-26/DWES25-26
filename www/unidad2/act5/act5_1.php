<?php
$lista1 = ["a" => "paco", "b"=> "pepe", "c"=> "juanillo"];
echo "<h2>Primera lista</h2><ul>";
foreach($lista1 as $array){
    echo"<li>$array </li>";
}
echo "</ul><h2>Segunda lista</h2><ul>";
$lista2 = ["b" => "alonso", "d"=> "lola", "e"=> "perola"];
foreach($lista2 as $array){
    echo"<li>$array </li>";
}
echo "</ul><h2>Listas unidas</h2><ul>";
$resultado = array_merge($lista1, $lista2);
foreach($resultado as $array){
    echo"<li>$array </li>";
}

?>