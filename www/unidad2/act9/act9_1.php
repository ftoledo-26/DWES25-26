<?php
$path = __DIR__.'/texto.txt';

$mensaje = ["Me ha encantado la web",
            "Faltan más imágenes",
            "Buena organización del contenido",
            "Muy útil la información publicada",
            "El diseño es muy claro y sencillo",
            "Sería bueno añadir un buscador",
            "Los colores son agradables",
            "Faltan ejemplos prácticos",
            "La velocidad de carga es buena",
            "La sección de contacto funciona muy bien"
];
$date = date('Y-m-d H:i:s');
$count = 0;
$fh = fopen($path, "a+");
if($fh === false){
    "no se ha podido abrir";
}
while(($linea = fgets($fh)) !== false){
    $count++;
}
echo"<h1>📝 Gestor de Comentarios (sin BD)</h1>";
echo"<strong>Total de comentarios guardados:</strong> $count";
echo"<h2>Historial</h2>";
fwrite($fh, "[".$date."] ".$mensaje[rand(0,count($mensaje)-1)]."\n");
rewind($fh);
echo"<ul>";
while (($linea = fgets($fh)) !== false) {
    echo "<li>$linea</li>";
}
fclose($fh)

?>