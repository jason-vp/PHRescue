<?php
$titulo= "Asoka Gestión - Alta perros";
$stylesheets=["/css/reset.css", "/css/general.css", "/css/alta-perro.css"];
$scripts=[];

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
require_once("html/altaRapida.phtml");
require_once("html/footer.html");

?>