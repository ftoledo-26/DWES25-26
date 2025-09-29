<?php
/*
---
title: Ejercicio 1: Numero pi
desc: Muestra el numero pi con 2 digitos
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    $numero = pi();
    printf("<h1>Los dos pirmeros decimales de PI son: %1\$.2f </h1>", $numero ); //printf usando el formate de float
?>  
</body>
</html>
    