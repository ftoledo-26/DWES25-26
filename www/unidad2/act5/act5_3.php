<?php
$lista = ["ana", "luis", "Marta", "Pablo"];
$lista2 = ["ana", "Lucía", "Pablo"];
$lista3 = array_intersect($lista, $lista2);
echo"Personas en la actividad 1:<br><ul>";
foreach($lista as $listado){
    echo"<li>$listado</li>";
}
echo"</ul><br>Personas en la lista 2:<br><ul>";
foreach($lista2 as $listado){
    echo"<li>$listado</li>";
}
echo"</ul><br>Personas en la lista 2:<br><ul>";
foreach($lista3 as $listado){
    echo"<li>$listado</li>";
}
?>