<?php
$list_num = [];
$cantidad = random_int(5,15);
for($i = 0; $i < $cantidad; $i++){
    $list_num[] = "&#". rand(10102,10111);
}
echo"entre estas ".$cantidad." ...<br><h1>";
foreach($list_num as $lista)
    echo $lista;
$new_list =array_unique($list_num);
$cantidad = count($new_list);
echo"<br></h1> hay $cantidad unicas<br><h1>";
foreach($new_list as $lista)
    echo $lista;


?> 