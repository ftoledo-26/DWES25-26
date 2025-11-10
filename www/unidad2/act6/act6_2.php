<?php
$str = $_POST["usuario"] ?? "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
$lista = [];
function FrstUpCase(&$str){
    global $lista;
    if (!empty($str)) {
        $str = ucfirst(strtolower($str));
        $lista[]= $str[0];
    }
}
$nombre_Sepa = explode(' ',$str);
for ($i = 0; $i < count($nombre_Sepa); $i++) {
    FrstUpCase($nombre_Sepa[$i]);
    if (trim($nombre_Sepa[$i]) === '') {
        continue;  
    }
    switch ($i) {
        case 0:
            echo "Nombre: " . $nombre_Sepa[$i];
            break;
        case 1:
            echo "<br>Primer Apellido: " . $nombre_Sepa[$i];
            break;
        case 2:
            echo "<br>Segundo Apellido: " . $nombre_Sepa[$i];
            break;
    }
}
echo"<br>";
$contador = 0;
foreach($lista as $letras){
    echo $letras;
    $contador++;
    echo($contador < count($lista))? ", " : " ";
    
}
?>