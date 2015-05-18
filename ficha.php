<?php
require_once("classes/page.php");
$animal="Emiliano";
$foto_animal="/images/emiliano.jpg";
$titulo= "PHRescue - Ficha " . $animal;
$scripts=["/javascript/jsFunctions.js"];

$usuario="Invitado";
$current_tab="";

if(isset($_GET["t"])) {
    $current_tab = $_GET["t"];
}

$perros=false;
$gatos=false;
$otros=false;

require_once("html/head.phtml");
require_once("html/header.phtml");
checkTipo($current_tab, $perros, $gatos, $otros);
require_once("html/ficha1.phtml");
require_once("html/ficha2.phtml");
require_once("html/ficha3.html");
require_once("html/footer.html");

?>