<?php
$temperatura = rand(-10,100);
$cpuCargada = rand(0,150);
$token = rand(1,2) == 1 ? "VACIO": "OK";
$path = __DIR__ ."/logs.txt";
try {
    print"🌡️ Temperatura:". $temperatura ."°C<br>";
    print"🖥️ Carga CPU:". $cpuCargada ."%<br>";
    print"🔐 Token: $token <br>";
    if($token == "VACIO")
        die("<br>❌ Error crítico: No hay token de acceso. El servidor no puede arrancar.");
    else if($temperatura <0 || $temperatura >80){
        $mensaje = "El sistema puede arrancar, pero bajo riesgo\n";
        error_log($mensaje,3,$path);
    }
    else if($cpuCargada > 100)
        throw new Exception("Carga de CPU demasiado alta. No se puede arrancar el servidor.", 1);
    else
        echo "<br>✅ Servidor iniciado correctamente.";
        
} catch (Exception $th) {
    echo "<br>🚨 Error: ". $th;
}finally{
    echo "<br>🧹 Fin del proceso de arranque.";
}
    
?>