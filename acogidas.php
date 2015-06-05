<?php
require_once("classes/page.php");
$titulo= "PHRescue - Acogidas";
$scripts= ["javascript/jsFunctions.js"];

$usuario="Invitado";

$current_tab='adopciones';

$paginador=paginador();
$headerPaginador=headerPaginador();


require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/acogidas.phtml");
if(isset($_GET["id"]) && isset($_GET["t]"])) {
    echo "<script type='text/javascript'> openOverlay(".$_GET['id'].");</script>";
}
require_once("html/footer.html");

?>