<?php
require_once("classes/page.php");
$titulo= "PHRescue - Consulta perros";
$scripts=[];

$usuario="Invitado";
$current_tab="";

if(isset($_GET["t"])) {
    $current_tab = $_GET["t"];
}

$perros=false;
$gatos=false;
$otros=false;

$paginador=paginador();
$headerPaginador=headerPaginador();

require_once("html/head.phtml");
require_once("html/header.phtml");
checkTipo($current_tab, $perros, $gatos, $otros);
require_once("html/consulta.phtml");
require_once("html/footer.html");

?>