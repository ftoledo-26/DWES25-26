<?php
$lista = ["Empleado1" =>["Ana", "Ventas", "activo"],
          "Empleado2" =>["Luis", "IT", "inactivo"],
          "Empleado3"=> ["Marta", "Marketing", "activo"]];

echo "<table border='1' >";
echo "<td>Nombre</td>";
echo"<td>Departamento</td>";
echo "<td style='width: 100px; text-align: center;'>estado</td>";   
foreach ($lista as $nombre_empleado => [$nombre, $Depa,$estado]) {
     echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$Depa</td>";
    echo "<td>$estado</td>";
    echo "</tr>";
};


foreach ($lista as $nombre_empleado) {
    if($nombre_empleado[2] == "activo"){
        echo "<tr>";
        echo "<td>$nombre</td>";
        echo "<td>$Depa</td>";
        echo "<td>$estado</td>";
        echo "</tr>";
    }
     
}

?>