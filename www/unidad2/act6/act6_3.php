<?php
$texto = "PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.";
$termino = "PHP";

$lista = explode(" ", $texto);
for($i = 0; $i < count($lista); $i++){
    $copia = $lista[$i];
    if(strtolower($copia) == strtolower($termino))
        $lista[$i] = "<mark>$lista[$i]</mark>";
}

foreach($lista as $text){
    echo $text. " ";
}
?>