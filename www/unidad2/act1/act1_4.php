<?php
/*
---
title: Ejercicio 4: Meter
desc: Mostrar por pantalla un meter con un porcentaje arriba
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

$numero = random_int(0,100);//numero aleatorio
echo"<div style="."display: flex; flex-direction: row;".">
        <h1>tu porcentaje es: $numero</h1>
    </div>
    <meter min="."0"." max="."100"." value=".$numero." style="."width:". "300px;"."></meter>";//le ponermos un minimo y un maximo al meter para que muestre la diferencia para el value

?>