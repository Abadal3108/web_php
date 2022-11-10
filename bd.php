<?php
$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
/*
  $resultados = $conexion->query("CREATE TABLE web_grupo_alex (
   name varchar(255),
    mail varchar(255) PRIMARY KEY ,
    password varchar(255),
    age numeric,
    rol varchar(255),      
    image varchar(255)
)");
*/
/*
$resultados = $conexion->query("CREATE TABLE web_grupo_alex_foro (
    title varchar(255) PRIMARY KEY,    //añadir tabla description max size 60 adn title 30
    content varchar(4000),
    image varchar(255)
)");
*/
/*
$add = $conexion->query("insert into web_grupo_alex(name,mail,password,age,rol,image)
values ('Alex','alex@gmail.com','alex13579',19,'admin','')");
*/

$add = $conexion->query("insert into web_grupo_alex_foro(title,content,image)
values ('okvdzkvdl isjakfjdadad afmadkjfadk','blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla','')");
/*
$resulta = $conexion->query("SELECT * FROM web_grupo_alex ");
foreach ($resulta as $fila) {
    echo $fila['name'] . '</br>';
    echo $fila['password'] . '</br>';
    echo $fila['age'] . '</br>';
    echo $fila['mail'] . '</br>';
    echo $fila['rol'] . '</br>';
    echo $fila['image'] . '</br>';
    echo '</br>';*/


$resulta = $conexion->query("SELECT * FROM web_grupo_alex_foro ");
foreach ($resulta as $fila) {
    echo $fila['title'] . '</br>';
    echo $fila['content'] . '</br>';
    echo $fila['image'] . '</br>';


}



