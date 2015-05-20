<?php
require_once("classes/page.php");
$titulo= "Asoka Gestión - Veterinarios";
$scripts= ["javascript/jsFunctions.js"];

$usuario="Invitado";

$current_tab='veterinaria';

$paginador=paginador();
$headerPaginador=headerPaginador();

require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/veterinarios.phtml");
require_once("html/footer.html");

?>