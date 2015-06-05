<?php
require_once("classes/page.php");
$titulo= "PHRescue - Correos";
$scripts= ["javascript/jsFunctions.js"];

$usuario="Invitado";

$current_tab='voluntariado';

$paginador=paginador();
$headerPaginador=headerPaginador();


require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/correos.phtml");
require_once("html/footer.html");

?>