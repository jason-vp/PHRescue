@extends('master.mainLayout')

@section('content')
<h2>Panel de Usuario</h2>

<div id='panel'>
<h3>Opciones</h3>

	<form>
        <fiedlset>
            <legend>Mis datos</legend>
            <label for='inNombreUsuario'>Nombre:
                <input type='text'
                       id="inNombreUsuario"
                       name="nombreUsuario"
                       class='w200px'
                       value="{{ $user->person->entity->name }}">
            </label>
            <label for='slPaisUsuario'>País:
                <select id='slPaisUsuario' name='paisUsuario'>
                    <option value='1'>España</option>
                </select>
            </label>
            <label for='slProvinciaUsuario'>Provincia:
                <select id="slProvinciaUsuario" name='provinciaUsuario' disabled>
                    <option value='1'>Alicante</option>
                </select>
            </label>
            <label for='slLocalidadUsuario'>Localidad:
                <select id="slLocalidadUsuario" name='slLocalidadUsuario' disabled>
                    <option value='2'>Altea</option>
                    <option value='3'>San Vicente</option>
                    <option value='4'>Alicante</option>
                    <option value='5'>Orihuela</option>
                </select>
            </label>

            <label for='inDireccionUsuario' >Dirección:
                <input type='text' name='direccionUsuario' id="inDireccionUsuario" class='w200px'></label>
            <label for='inTelefonoUsuario'>Teléfono:
                <input type='tel'
                       id="inTelefonoUsuario"
                       name='telefonoUsuario'
                       value="{{ $user->person->entity->phone }}">
            </label>

            <label for='inMailUsuario' >E-mail:
                <input type='email'
                       id="inMailUsuario"
                       name='mailUsuario'
                       class='w200px'
                       value="{{ $user->person->entity->email }}">
            </label>
            <label>Contraseña:
                <input type="password" name="passwordUsuario">
            </label>

            <button type='submit' class='boton'>Enviar</button>
        </fiedlset>
    </form>
    <form>
        <fieldset>
            <legend>Cambiar contraseña</legend>
            <label>Contraseña actual:
                <input type="password" name="passwordUsuario">
            </label></br>
            <label>Nueva contraseña:
                <input type="password" name="newPasswordUsuario">
            </label></br>
            <label>Repite nueva contraseña:
                <input type="password" name="repNewPasswordUsuario">
            </label>

            <button type='submit' class='boton'>Enviar</button>
        </fieldset>
    </form>
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
@stop