<?php

//registro
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
if( isset($_POST['name'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $age = $_POST['age'];
}

if (!isset($_POST['mail'])) {

} else {


    $mail = $_POST['mail'];
    if ($mail == null) {
        header("Location: sign_up.phtml");
    } else {

        $password = $_POST['password'];
        $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
        $result = $conexion->query("SELECT mail FROM web_grupo_alex WHERE mail='$mail'")->fetch();
    }
    if (isset($mail)) {
        if ($mail == $result['mail']) {


        } else {
            $add = $conexion->query("insert into web_grupo_alex(name,mail,password,age,rol,image)
                                        values ('$name','$mail','$password','$age','reader','')");
            session_start();
            $_SESSION['user'] = $mail;
            $_SESSION['rol']="reader";
          header("Location: ../../Paginaciones/Paginacion_home/index.php");


        }
    }
}
?>