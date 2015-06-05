<?php
require_once("classes/page.php");
$titulo= "PHRescue - Gestión Seguimientos";
$scripts= ["javascript/jsFunctions.js"];

$usuario="Invitado";

$current_tab='adopciones';

$paginador=paginador();
$headerPaginador=headerPaginador();

$gestor = false;
if(isset($_GET['t'])) {
    if($_GET['t']=="gestion")
        $gestor=true;
}


require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/seguimientos.phtml");
if(isset($_GET["id"]) ) {
    echo "<script type='text/javascript'> openOverlay(".$_GET['id']. ");</script>";
}
require_once("html/footer.html");

?>