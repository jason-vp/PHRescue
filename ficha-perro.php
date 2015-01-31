<?php
$animal="Emiliano";
$foto_animal="/images/emiliano.jpg";
$titulo= "Asoka Gestión - Ficha " . $animal;
$stylesheets=["/css/reset.css", "/css/general.css", "/css/ficha-perro.css"];
$scripts=["/javascript/habilitar-modificacion.js"];

$usuario="Invitado";

$current_tab="perros";

require_once("html/head.html");
require_once("html/header.html");
require_once("html/cuerpo-ficha-perro1.html");
require_once("html/datos-perro.html");
require_once("html/cuerpo-ficha-perro2.html");
require_once("html/footer.html");

?>