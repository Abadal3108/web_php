<?php
// Llamamos al modelo
require('Paginaciones/01_Paginación/models/articulos.model.php');


$artic = new Articulos_model();
$pagina = (isset($_GET['pagina']))?$_GET['pagina']: 1;
$articulos = $artic->getArticulos($pagina);
$numeroPaginas = $artic->getTotalPages();

// Llamamos a la vista
header('Content-Type: text/html; charset=utf-8');
require('home/home_user.phtml');

