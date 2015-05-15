<?php
$animal="Emiliano";
$foto_animal="/images/emiliano.jpg";
$titulo= "Asoka Gestión - Ficha " . $animal;
$stylesheet="/css/ficha-perro.css";
$scripts=["/javascript/habilitar-modificacion.js"];

$usuario="Invitado";

$current_tab="perros";

require_once("html/head.phtml");
require_once("html/header.phtml");
require_once("html/ficha1.html");
require_once("html/ficha2.html");
require_once("html/ficha3.html");
require_once("html/footer.html");

?>