@extends('master.mainLayout')

@section('content')
<h2>Usuarios</h2>
<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form id="Usuario">
            <a href="#!" class="innerDetails blackList">Marcar como persona non grata</a>
            <fieldset>

                <label for="'inDNIUsuario">DNI: <input id="inDNIUsuario" type="text" name="DNIUsuario"/></label>
                <label>Nick usuario:
                    <input type="text" name="nickUsuario">
                </label>
                <label for='inNombreUsuario'>Nombre:
                    <input type='text' id="inNombreUsuario" name="nombreUsuario" class='w200px'></label>
                <label for='slPaisUsuario'>País:
                    <select id='slPaisUsuario' name='paisUsuario'>
                        <option value='1'>España</option>
                    </select></label>
                <label for='slProvinciaUsuario'>Provincia:
                    <select id="slProvinciaUsuario" name='provinciaUsuario' disabled>
                        <option value='1'>Alicante</option>
                    </select></label>
                <label for='slLocalidadUsuario'>Localidad:
                    <select id="slLocalidadUsuario" name='slLocalidadUsuario' disabled>
                        <option value='2'>Altea</option>
                        <option value='3'>San Vicente</option>
                        <option value='4'>Alicante</option>
                        <option value='5'>Orihuela</option>
                    </select></label>

                <label for='inDireccionUsuario' >Dirección:
                    <input type='text' name='direccionUsuario' id="inDireccionUsuario" class='w200px'></label>
                <label for='inTelefonoUsuario'>Teléfono:
                    <input type='tel' id="inTelefonoUsuario" name='telefonoUsuario'></label>

                <label for='inMailUsuario' >E-mail:
                    <input type='email' id="inMailUsuario" name='mailUsuario' class='w200px'></label>

                <div>Permisos: </div>
                <div id="fsPermisos">
                        <fieldset>
                            <legend>Perros: </legend>
                            <label>
                                <input type="checkbox" name="permisoPerros" value="lectura"> Lectura
                            </label>
                            <label>
                                <input type="checkbox" name="permisoPerros" value="escritura"> Escritura
                            </label>
                        </fieldset>
                    <fieldset>
                        <legend>Gatos: </legend>
                        <label>
                            <input type="checkbox" name="permisoGatos" value="lectura"> Lectura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoGatos" value="escritura"> Escritura
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Exóticos: </legend>
                        <label>
                            <input type="checkbox" name="permisoExoticos" value="lectura"> Lectura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoExoticos" value="escritura"> Escritura
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Veterinaria: </legend>
                        <label>
                            <input type="checkbox" name="permisoVeterinaria" value="lectura"> Lectura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoVeterinaria" value="escritura"> Escritura
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Adopciones: </legend>
                        <label>
                            <input type="checkbox" name="permisoAdopciones" value="lectura"> Lectura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoAdopciones" value="escritura"> Escritura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoCCorreos" value="escritura" checked> Consulta correos
                        </label>
                        <label>
                            <input type="checkbox" name="permisoGSegPerros" value="escritura"> Gestión Seguimientos Perros
                        </label>
                        <label>
                            <input type="checkbox" name="permisoGSegGatos" value="escritura"> Gestión Seguimientos Gatos
                        </label>
                        <label>
                            <input type="checkbox" name="permisoGSegExoticos" value="escritura"> Gestión Seguimientos Exóticos
                        </label>
                    </fieldset>

                    <fieldset>
                        <legend>Voluntariado: </legend>
                        <label>
                            <input type="checkbox" name="permisoVoluntarios" value="lectura"> Lectura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoVoluntarios" value="escritura"> Escritura
                        </label>
                        <label>
                            <input type="checkbox" name="permisoVoluntarios" value="escritura"> Alta Usuarios
                        </label>
                    </fieldset>
                    <p class="disclaimer">
                        *Para la mayoría de datos cruzados (Ej. Datos adoptante en ficha de animal) se necesitarán los permisos de ambas secciones para lectura/escritura.
                    </p>
                    </label>
                </div>


                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>

    </div>
</div>

<div id='diAltaBusqueda' class='borderUp'>
    <div id="diAlta">
        <h3> Alta </h3>
        <button type="button" class="boton buOpenOverlay" onclick="openOverlay(-1)" >Alta</button>
    </div>
    <div id="diBusqueda">
        <h3> Buscar </h3>
        <form class='center'>
            <fieldset>
                <p>
                    <label for="inIDUsuario">DNI/Nick: <input id="inIDUsuario" type="text" name="IDUsuario"/></label>
                    <label for='inBNombreUsuario'>Nombre: <input id="inBNombreUsuario" type='text' name='inBNombreUsuario'/> </label>
                </p>

                <fieldset>
                    <legend><h4>Ordenar por:</h4></legend>
                    <p>
                        <input id='orden1' type='radio' name='orden' value='1'checked /><label for='orden1'>Nombre (A-Z)</label>
                        <input id='orden2' type='radio' name='orden' value='2'/><label for='orden2'>Fecha alta (Desc)</label>
                    </p>
                </fieldset>
                <input type='submit' class='boton' value='Buscar'/>
            </fieldset>
        </form>
    </div>
</div>
<div id='resultados' class='borderUp'>

    <?php echo $headerPaginador ?>

    <table>
        <thead>
        <tr>
            <th>Nick</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td>Alfonso1</td>
                <td>Alfonso Pérez García</td>
                <td>alfonso@prueba.shelt</td>
                <td>
                    <button type='submit' title='Ver Detalles' class='buEdit' onclick="openMultiOverlay(1, 'Usuario')">
                    </button><button type='submit' title='Eliminar' class='buDelete'></button>
                </td>
            </tr>
        <?php endfor; ?>
    </table>

    <?php echo $paginador ?>

</div>
@stop

@section ('autoScripts')
    <?php
    if($usuario) {
        echo "<script type='text/javascript'> openOverlay(".$usuario.");</script>";
    }
    ?>
@stop