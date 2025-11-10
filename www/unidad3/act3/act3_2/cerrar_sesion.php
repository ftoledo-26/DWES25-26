<?php
    session_start();
    unset($_SESSION['inicio']);
    session_destroy();
    
    header("Location: act3_2.php")
?>