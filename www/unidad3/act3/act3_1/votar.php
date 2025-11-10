<?php
session_start();
if(isset($_POST['boton'])){
    switch (true) {
        case $_POST['boton'] == 'A':
            $_SESSION['VotarA']++;
            break;
        case $_POST['boton'] == 'B':
            $_SESSION['VotarB']++;
            break;
        case $_POST['boton'] == '0':
                unset($_SESSION['VotarA'], $_SESSION['VotarB']);
                session_destroy();
            break;
        default:
            echo"Que has tocado Maribel";
            break;
    }
}
header("Location: act3_1.php");
exit();
?>