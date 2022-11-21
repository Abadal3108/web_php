<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$borrar = $conexion->query('DELETE FROM web_grupo_alex_comentario WHERE content="' . $_POST['content'] . '"');
$borrar->fetchAll();
header("Location: ../../Paginaciones/Paginacion_home/index.php");