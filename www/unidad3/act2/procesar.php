<?php
/*define('PAISES', ['es', 'mx', 'ar','co']);
$lenguajes_perm = ['html', 'css','javascript','php'];
if(!empty($_POST["nombre"]) ||!$_POST["nombre"] =="")
    echo"Tu nombre es $_POST[nombre]";
else
    echo "no mandes nada vacio perro";
if(!empty($_POST['pais'])){
    if(in_array($_POST['pais'], PAISES))
        echo "Pais: se ha recibido $_POST[pais]";
    else
        echo "el pais no es valido";
}

else
    echo 'el pais no se ha recibido';

if(!empty($_POST['lenguajes']) && is_array($_POST['lenguajes'])){
    $no_validos  =array_diff($_POST['lenguajes'], $lenguajes_perm);
    if(count($no_validos) == 0){
        echo'<br>Los lenguajes estan dentro de los esperados';
    }else
        echo'<br>Se han recivido lenguajes no esperados';
    
}
else
    echo'Se han recivido lenguajes no esperados o no se han recivio';


if(!empty($_FILES['archivo'])){
    $nombre = $_FILES['archivo']['name'];
    $size = ($_FILES['archivo']['size']/8)/10000;
    echo"<br> El tamaño del archivo es $size  y su nombre es $nombre";
}
*/

$value = "Valor_de_la_cookie";
setcookie("micookie", $value, time()+3600);
echo"cookie Creada";
print_r $_COOKIE["micookie"];

?>