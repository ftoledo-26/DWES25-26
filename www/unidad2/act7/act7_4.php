<?php
function mayor(...$argumentos):int{
    $temp=0;
    foreach($argumentos as $nums){
        if($nums > $temp)
            $temp = $nums;
    }
    return $temp;
}
$num = mayor(2,3,6,4);
print $num;



?>