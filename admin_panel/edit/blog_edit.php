<?php
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$fileToUpload = $_FILES['fileToUpload'];

$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../../images/' . $_FILES['fileToUpload']['name']);


$add = $conexion->query('update web_grupo_alex_foro set title="' . $title . '" , description= "' . $description . '", content="' . $content . '" , image="' . $_FILES['fileToUpload']['name'] . '" , date="' . date('Y-m-d', time()) . '" where title="' . $_POST['title'] . '"');


header("Location: ../../Paginaciones/Paginacion_home/index.php");