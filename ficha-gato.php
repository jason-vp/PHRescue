<?php
$animal="Raúl";
$foto_animal="/images/raul.jpg";
$titulo= "Asoka Gestión - Ficha " . $animal;
$stylesheets=["/css/reset.css", "/css/general.css", "/css/ficha-perro.css"];
$scripts=["/javascript/habilitar-modificacion.js"];

$usuario="Invitado";

$current_tab="gatos";

require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/ficha1.html");
require_once("html/datos-gato.html");
require_once("html/ficha3.html");
require_once("html/footer.html");

?>