<?php
$lista = [];
$mensaje_ERR = ['nombre' => 'Nombre es obligatorio y máx. 60 caracteres.',
                'email' => 'Email obligatorio y con formato válido (ej: usuario@dominio.com).',
                'url' => 'URL obligatoria y con formato válido (ej: https://ejemplo.com).',
                'sexo'=> 'Sexo no válido (elige una opción permitida).',
                'convivientes'=>'Convivientes debe ser un número entero entre 0 y 5.',
                'aficiones'=>'Selecciona al menos una afición.',
                'menu'=>'Menú no válido (elige una opción permitida).'];
$campos = array_keys($mensaje_ERR);

foreach($campos as $campo){
    if(empty($_POST[$campo]))
        $lista[] = $mensaje_ERR[$campo];
    else{
        if($campo !== 'aficiones')
            $valor = trim($_POST[$campo]);
        switch ($campo) {
            case 'nombre':
                if (strlen($valor) > 60)
                    $lista[] = $mensaje_ERR['nombre'];
                break;

            case 'email':
                $prueba = explode('@', $valor);
                if (count($prueba) < 2)
                    $lista[] = $mensaje_ERR['email'];
                break;

            case 'url':
                if (!filter_var($valor, FILTER_VALIDATE_URL))
                    $lista[] = $mensaje_ERR['url'];
                break;
            case 'convivientes':
                if($valor < 0 || $valor > 5)
                    $lista[] = $mensaje_ERR['convivientes'];
                break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<?php
if($lista){
    echo '<ul>';
        foreach($lista as $prueba){
            echo'<li>'.$prueba.'</li>';
        }
    echo'</ul>';
}else{
    echo'<table class="striped"><tbody>';
    foreach($campos as $campo){
        if(is_array($_POST[$campo])){
            echo"<tr><th>$campo</th><td>";
            foreach($_POST[$campo] as $paconi){
                echo"$paconi ,";
            }
            echo"</td></tr>";
        }else
          echo"<tr><th>$campo</th><td>$_POST[$campo]</td></tr>";
    }
    
}
echo'</tbody></table><a href="act1_1.php">volver al inicio</a>';
?>