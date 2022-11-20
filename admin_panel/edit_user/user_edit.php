<?php
session_start();
if (isset($_SESSION['user'])) {
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');


    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');


    $add = $conexion->query('update web_grupo_alex set name="' . $_POST['name'] . '" , password= "' . $_POST['password'] . '", age="' . $_POST['age'] . '" , mail="' .$_POST['mail'] . '" , rol="' .$_POST['rol']. '" where mail="' . $_POST['mail'] . '"');


    header("Location: edit_user.phtml");
} else {
    echo "NO ERES ADMIN";
}
?>