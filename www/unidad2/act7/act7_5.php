<?php
function digitoN(int $num, int $pos) : int{
    $str = (string)$num;
    return(int)$str[$pos-1];
}
echo "el numero es 2345";
echo "<br> y la posicion 2 es: ";
print digitoN(2345, 2);


?>