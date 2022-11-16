<?php
// Llamamos al modelo
require('models/articulos.model.php');


$artic = new Articulos_model();
$pagina = (isset($_GET['pagina']))?$_GET['pagina']: 1;
$articulos = $artic->getArticulos($pagina);
$numeroPaginas = $artic->getTotalPages();

// Llamamos a la vista
header('Content-Type: text/html; charset=utf-8');
session_start();
/*
if (isset($_SESSION['user'])){
    require ('../../home/home_user.phtml');
}else{ */
    require('../../home/home.phtml');
/*
}
*/