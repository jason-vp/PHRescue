<?php
// TODO: Fix this mess properly
$titulo= "Asoka Gestión - Error 404 Página no encontrada";
$usuario="Invitado";
$current_tab="none";
?>
@extends('master.mainLayout')

@section('content')
<h2>Error 404 Página no encontrada</h2>

<div class='borderUp'>
<p> Parece que la página que estabas buscando no existe o todavía está en construcción. Por favor, sigue utilizando el resto del sitio mientras nuestros mejores
profesionales se encargan del problema. </p>

<div id='imagenes'>
<img src='/images/dog-404.jpg'><img src='/images/cat-404.png'>
</div>
</div>
@stop