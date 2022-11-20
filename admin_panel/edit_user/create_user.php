<?php
session_start();
if (isset($_SESSION['user'])) {
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $rol = $_POST['rol'];
    }

    if (!isset($_POST['mail'])) {

    } else {


        $mail = $_POST['mail'];
        if ($mail == null) {
            header("Location: create_user.phtml");
        } else {

            $password = $_POST['password'];
            $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
            $result = $conexion->query("SELECT mail FROM web_grupo_alex WHERE mail='$mail'")->fetch();
        }
        if (isset($mail)) {

                $add = $conexion->query('insert into web_grupo_alex(name,mail,password,age,rol)
                                        values ("'.$name.'","'.$mail.'","'.$password.'","'.$age.'","' . $rol . '")');

                header("Location: edit_user.phtml");



        }
    }

} else {
    echo "NO ERES ADMIN";
}
?>
