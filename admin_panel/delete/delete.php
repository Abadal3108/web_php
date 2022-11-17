<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$borrar = $conexion->query('DELETE FROM web_grupo_alex_foro WHERE title="' . $_POST['title'] . '"');
$borrar->fetchAll();
header("Location: delete.phtml");
