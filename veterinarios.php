<?php
$titulo= "Asoka Gestión - Veterinarios";
$stylesheets= ["/css/reset.css", "/css/general.css", "/css/consulta.css"];
$scripts= [];

$usuario="Invitado";

$current_tab='veterinaria';

require_once("html/head.html");
require_once("html/header.html");
require_once("html/cuerpo-veterinarios.html");
require_once("html/footer.html");

?>