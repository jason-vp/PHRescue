<?php
require_once("classes/page.php");
$titulo= "PHRescue - Consulta ";
$scripts=[];

$usuario="Invitado";
$current_tab="";

if(isset($_GET["t"])) {
    $current_tab = $_GET["t"];
    $titulo.=$current_tab;
}

$perros=false;
$gatos=false;
$exoticos=false;

$paginador=paginador();
$headerPaginador=headerPaginador();

require_once("html/head.phtml");
require_once("html/header.phtml");
checkTipo($current_tab, $perros, $gatos, $exoticos);
require_once("html/consulta.phtml");
require_once("html/footer.html");

?>