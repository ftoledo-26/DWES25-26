<?php
$email = "ftoloper633@g.educaand.es";
$usuario = "";
$Dominio = "";
$Usuario_Enmas = "";

/*for($i = 0; $i < strlen($email); $i++){
    if($email[$i] == '@')
        $despues = true;
    elseif ($email !== '@' && $despues == false ){
        $usuario .= $email[$i];
    }
    else
        $Dominio .=  $email[$i];

}*/
list($usuario, $Dominio) = explode('@', $email);

for($i = 0; $i < strlen($usuario); $i++){
    if($i !== 0 && $i !== strlen($usuario) - 1)
        $Usuario_Enmas .= "*";
    else    
        $Usuario_Enmas.= $usuario[$i];
}
echo $email . "<br>";
echo $usuario. '<br>';
echo $Dominio . "<br>";
echo $Usuario_Enmas;

?>