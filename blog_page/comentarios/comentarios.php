
<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$content = $_POST['content'];
session_start();
$add = $conexion->query('insert into web_grupo_alex_comentario(user,post,id,content,date)
values ("' . $_SESSION['user'] . '","' .$_POST['title']  . '",null,"' . $_POST['content'] . '","' . date('Y-m-d', time()) . '")');

header("Location: ../../Paginaciones/Paginacion_home/index.php");