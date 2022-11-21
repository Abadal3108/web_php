<?php

if (!isset($_POST['mail'])){

}else{


    $mail = $_POST['mail'];
    if ($mail == null) {

    } else {
        $password = $_POST['password'];
        $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
        $result = $conexion->query("SELECT mail, password,rol FROM web_grupo_alex WHERE mail='$mail'")->fetch();
    }
    if (isset($mail)) {
        if ($mail == null) {
            echo "incorrecto";
        } else {
            if ($mail == $result['mail'] && $password == $result['password']) {
                $login = 1;
                session_start();
                $_SESSION['user'] = $mail;
                $_SESSION['rol'] = $result['rol'];
                header("Location: ../../Paginaciones/Paginacion_home/index.php");


            } else {
                header("Location: login.html");
            }
        }
    }
}