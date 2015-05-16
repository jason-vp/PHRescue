<?php
$animal="Emiliano";
$foto_animal="/images/emiliano.jpg";
$titulo= "Asoka Gestión - Ficha " . $animal;
$stylesheet="/css/ficha-perro.css";
$scripts=["/javascript/habilitar-modificacion.js"];

$usuario="Invitado";

$current_tab=$_GET["t"];

$perros=false;
$gatos=false;
$otros=false;

switch($current_tab) {
    case 'perros':
        $perros=true;
        break;
    case 'gatos':
        $gatos=true;
        break;
    case 'otros':
        $otros=true;
        break;
    default:
        header("HTTP/1.0 404 Not Found - Archive Empty");
        header('Location: /404.php');
        exit;

}

require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/ficha1.phtml");
require_once("html/ficha2.phtml");
require_once("html/ficha3.html");
require_once("html/footer.html");

?>