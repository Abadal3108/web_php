<?php
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$fileToUpload = $_FILES['fileToUpload'];

$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
move_uploaded_file($_FILES['fileToUpload']['tmp_name'],'../../images/' . $_FILES['fileToUpload']['name']);

$add = $conexion->query('insert into web_grupo_alex_foro(title,description,content,image,date)
                                        values ("'.$title.'","'.$description.'","'.$content.'","'. $_FILES['fileToUpload']['name'] .'","'.date('Y-m-d',time()).'")');

echo $fileToUpload;
header("Location: ../../Paginaciones/Paginacion_home/index.php");