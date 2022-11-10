<?php

if (!isset($_POST['mail'])){

}else{


    $mail = $_POST['mail'];
    if ($mail == null) {

    } else {
        $password = $_POST['password'];
        $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
        $result = $conexion->query("SELECT mail, password FROM web_grupo_alex WHERE mail='$mail'")->fetch();
    }
    if (isset($mail)) {
        if ($mail == null) {
            echo "incorrecto";
        } else {
            if ($mail == $result['mail'] && $password == $result['password']) {

                header("Location: http://localhost:63343/project_web/Paginaciones/01_Paginaci%C3%B3n/index.php?_ijt=6n3hhau0gn47un83e733mirbk7&_ij_reload=RELOAD_ON_SAVE");


            } else {
                header("Location: http://localhost:63343/project_web/login_signup/login/login.html");
            }
        }
    }
}