<?php
require_once("classes/page.php");
$titulo= "PHRescue - Voluntarios";
$scripts= ["javascript/jsFunctions.js"];

$usuario="Invitado";

$current_tab='voluntariado';

$paginador=paginador();
$headerPaginador=headerPaginador();


require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/voluntarios.phtml");
if(isset($_GET["id"]) && isset($_GET["t]"])) {
    echo "<script type='text/javascript'> openMultiOverlay(".$_GET['id']. ",".$_GET['t'].");</script>";
}
require_once("html/footer.html");

?>