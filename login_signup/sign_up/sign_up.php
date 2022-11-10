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
        header("Location: http://localhost:63342/project_web/login_signup/sign_up/sign_up.html?_ijt=9ugh67e136ru02iom30jialldj&_ij_reload=RELOAD_ON_SAVE");
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


          header("Location: http://localhost:63343/project_web/Paginaci%C3%B3nes/01_Paginaci%C3%B3n/index.php?_ijt=9eb18287t22ucv7pgdthg3m1lu&_ij_reload=RELOAD_ON_SAVE");


        }
    }
}
?>