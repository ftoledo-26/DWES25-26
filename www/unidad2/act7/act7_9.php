<?php
function aumentarVista(int &$var){
    $var++;
}
$count = 2;
echo "<h1>El contador esta en: $count </h1>";
echo "<h3>El contador ha aumentado en 1</h3> ".aumentarVista($count);
echo "<h1>El contador esta en: $count </h1>";

?>