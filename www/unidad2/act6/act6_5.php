<?php

$link = 'http://www.linkfred.com/carpeta1/index.php';
$pagina  = explode("/", $link);
echo"<b>Url: </b> $link <br>";
echo $pagina[count($pagina)-1];


?>