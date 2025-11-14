<?php 
function mostrar(array $data){
    echo"<h1>Cursos</h1><ul>";
    foreach ($data['cusos'] as $curso) {
        echo "<li><h2>{$curso['id']} {$curso['nombre']}<h2></li>";
    }

}

?>