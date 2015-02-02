<?php
$animal="Rox";
$foto_animal="/images/rox.jpg";
$titulo= "Asoka Gestión - Ficha " . $animal;
$stylesheets=["/css/reset.css", "/css/general.css", "/css/ficha-perro.css"];
$scripts=["/javascript/habilitar-modificacion.js"];

$usuario="Invitado";

$current_tab="otros";

require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/cuerpo-ficha-perro1.html");
require_once("html/datos-otro.html");
require_once("html/cuerpo-ficha-perro2.html");
require_once("html/footer.html");

?>