<?php
$list_num = [];
$cantidad = random_int(5,15);
for($i = 0; $i < $cantidad; $i++){
    $list_num[] = "&#". rand(128512,128580);
}
echo "Grupo:";
foreach ($list_num as $key) {
    echo $key;
}
$cantidad = "&#". rand(128512,128580);
echo array_search($cantidad, $list_num) == true ? "<br>$cantidad <br>si esta en el grupo " : 
"<br>no esta";

?>