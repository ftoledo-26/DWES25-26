<?php
$lista = [];
for($i = 0; $i < 10; $i++){
    $lista[] = random_int(1,100);
}
echo "<table border='1'><tr>";
foreach ($lista as $num) {
    echo($num %2 == 0) ? "<th style='color: blue;'>$num</th>":
                                "<th style='color: red;'>$num</th>";
}
echo "</tr>";

?>