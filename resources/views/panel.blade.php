@extends('master.mainLayout')

@section('content')
    <h2>Panel de Usuario</h2>

    <div id='panel'>
    <h3>Opciones</h3>

        <user-me-update-info></user-me-update-info>

        <user-me-update-password></user-me-update-password>

        <h4>Mis seguimientos</h4>
        <ul>
            <li><a href="/seguimiento/1">Emiliano - Alicante</a></li>
            <li><a href="/seguimiento/1">Emiliano - Alicante</a></li>
            <li><a href="/seguimiento/1">Emiliano - Alicante</a></li>
            <li><a href="/seguimiento/1">Emiliano - Alicante</a></li>
            <li><a href="/seguimientos">Más...</a></li>
        </ul>
        <vue-test></vue-test>
    </div>

    <script>

    </script>
@stop