<?php
require_once("classes/page.php");
$titulo= "PHRescue - Paseadores";
$scripts= ["javascript/jsFunctions.js"];

$usuario="Invitado";

$current_tab='voluntariado';

$paginador=paginador();
$headerPaginador=headerPaginador();


require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/paseadores.phtml");
if(isset($_GET["id"]) ) {
    echo "<script type='text/javascript'> openOverlay(".$_GET['id']. ");</script>";
}
require_once("html/footer.html");

?>