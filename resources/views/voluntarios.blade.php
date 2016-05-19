@extends('master.mainLayout')

@section('content')
<h2>Voluntarios</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay" class="multiOverlay">
        <h3> Alta</h3>
        <form id="voluntario">
            <a href="#!" class="innerDetails blackList">Marcar como persona non grata</a>
            <fieldset>

                <label for="'inDNIVoluntario">DNI: <input id="inDNIVoluntario" type="text" name="DNIVoluntario"/></label>
                <label for='inNombreVoluntario'>Nombre:
                    <input type='text' id="inNombreVoluntario" name="nombreVoluntario" class='w200px'></label>
                <label for='slPaisVoluntario'>País:
                    <select id='slPaisVoluntario' name='paisVoluntario'>
                        <option value='1'>España</option>
                    </select></label>
                <label for='slProvinciaVoluntario'>Provincia:
                    <select id="slProvinciaVoluntario" name='provinciaVoluntario' disabled>
                        <option value='1'>Alicante</option>
                    </select></label>
                <label for='slLocalidadVoluntario'>Localidad:
                    <select id="slLocalidadVoluntario" name='slLocalidadVoluntario' disabled>
                        <option value='2'>Altea</option>
                        <option value='3'>San Vicente</option>
                        <option value='4'>Alicante</option>
                        <option value='5'>Orihuela</option>
                    </select></label>

                <label for='inDireccionVoluntario' >Dirección:
                    <input type='text' name='direccionVoluntario' id="inDireccionVoluntario" class='w200px'></label>
                <label for='inTelefonoVoluntario'>Teléfono:
                    <input type='tel' id="inTelefonoVoluntario" name='telefonoVoluntario'></label>

                <label for='inMailVoluntario' >E-mail:
                    <input type='email' id="inMailVoluntario" name='mailVoluntario' class='w200px'></label>
                <label>Fecha inicio:
                    <input type="date">
                </label>

                <label>Archivo DNI:
                    <input type="file" name="archivoDNI">
                </label>
                <div class="innerDetails">
                <div>
                    <p>
                        Turnos:</p>
                    <ul>
                        <?php for($i=0; $i<2; $i++): ?>
                            <li>San Vicente1 - Perros - Jueves-Mañana</li>
                        <?php endfor; ?>
                        <li>
                            <fieldset>
                            <select id="slAlbergueTurno" name="albergueTurno">
                                <option></option>
                                <option>San Vicente1</option>
                            </select>

                            <select name="animalesTurno">
                                <option></option>
                                <option>General</option>
                                <option>Perros</option>
                                <option>Gatos</option>
                                <option>Exóticos</option>
                            </select>

                            <select name="diaTurno">
                                <option></option>
                                <option>Lunes</option>
                                <option>Martes</option>
                                <option>Miércoles</option>
                                <option>Jueves</option>
                                <option>Viernes</option>
                                <option>Sábado</option>
                                <option>Domingo</option>
                            </select>

                            <select name="horaTurno">
                                <option></option>
                                <option>Mañana</option>
                                <option>Tarde</option>
                                <option>Noche</option>
                            </select>
                            <button type="button" class="buAdd"></button>
                            </fieldset>
                        </li>
                    </ul>
                </div>
                    <div>
                    <p>Roles:</p>
                    <ul>
                        <?php for($i=0; $i<2; $i++): ?>
                            <li>General - Perros - Adopciones</li>
                        <?php endfor; ?>
                        <li>
                            <fieldset>
                                <select id="slAlbergueRol" name="albergueRol">
                                    <option>General</option>
                                    <option>San Vicente1</option>
                                </select>
                                <select name="tipoRolVoluntario">
                                    <option></option>
                                    <option>General</option>
                                    <option>Perros</option>
                                    <option>Gatos</option>
                                    <option>Exóticos</option>
                                </select>
                                <select name="rolVoluntario">
                                    <option></option>
                                    <option>Adopciones</option>
                                    <option>Rastros</option>
                                    <option>Charlas</option>
                                    <option>Voluntariado</option>
                                </select>
                                <button type="button" class="buAdd"></button>
                            </fieldset>
                        </li>
                    </ul>
                    </div>
                </div>

                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>

        <form id="rol">
            <fieldset>
                <label for="slCategoriaRol">Categoría:
                    <select id="slCategoriaRol" name="categoriaRol">
                        <option>General</option>
                        <option>Perros</option>
                        <option>Gatos</option>
                        <option>Exóticos</option>
                    </select>
                </label>
                <label for="inRol">Rol:
                    <input type="text" name="rol" id="inRol">
                </label>
                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>

        <form id="albergue">
            <fieldset>
                <label for="inAlbergue">Nombre:
                    <input type="text" name="albergue" id="inAlbergue">
                </label>

                <label for='slProvinciaAlbergue'>Provincia:
                    <select id="slProvinciaAlbergue" name='provinciaAlbergue'>
                        <option value='1'>Alicante</option>
                    </select></label>
                <label for='slLocalidadAlbergue'>Localidad:
                    <select id="slLocalidadAlbergue" name='slLocalidadAlbergue' disabled>
                        <option value='2'>Altea</option>
                        <option value='3'>San Vicente</option>
                        <option value='4'>Alicante</option>
                        <option value='5'>Orihuela</option>
                    </select></label>

                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>
    </div>
</div>

<div id='diAltaBusqueda' class='borderUp'>
    <div id="diAlta">
        <h3> Alta </h3>
        <button type="button" class="boton buOpenOverlay" onclick="openMultiOverlay('voluntario', -1)" >Alta voluntario</button>
        <button type="button" class="boton buOpenOverlay" onclick="openMultiOverlay('rol', -1)" >Alta rol</button>
        <button type="button" class="boton buOpenOverlay" onclick="openMultiOverlay('albergue', -1)" >Alta albergue</button>
    </div>
    <div id="diBusqueda">
        <h3> Buscar </h3>
        <form class='center'>
            <fieldset>
                <p>
                    <label for="inIDVoluntario">DNI: <input id="inIDVoluntario" type="text" name="IDVoluntario"/></label>
                    <label for='inBNombreVoluntario'>Nombre: <input id="inBNombreVoluntario" type='text' name='inBNombreVoluntario'/> </label>
                </p>
                <p><strong>Turno:</strong></p>
                    <fieldset>
                    <label>Albergue:
                        <select name="bAlbergueTurno">
                            <option>Todos</option>
                            <option>San Vicente1</option>
                        </select>
                    </label>

                    <label >Tipo:
                        <select name="animalesTurno">
                            <option>Todos</option>
                            <option>General</option>
                            <option>Perros</option>
                            <option>Gatos</option>
                            <option>Exóticos</option>
                        </select>
                    </label>
                    <label>Día:
                        <select name="diaTurno">
                            <option>Todos</option>
                            <option>Lunes</option>
                            <option>Martes</option>
                            <option>Miércoles</option>
                            <option>Jueves</option>
                            <option>Viernes</option>
                            <option>Sábado</option>
                            <option>Domingo</option>
                        </select>
                    </label>
                    <label>Hora:
                        <select name="horaTurno">
                            <option>Todos</option>
                            <option>Mañana</option>
                            <option>Tarde</option>
                            <option>Noche</option>
                        </select>
                    </label>
                </fieldset>

                <p><strong>Rol: </strong></p>
                <fieldset>
                    <label>Lugar:
                        <select id="slAlbergueRol" name="albergueRol">
                            <option>Todos</option>
                            <option>General</option>
                            <option>San Vicente1</option>
                        </select>
                    </label>
                    <label>Tipo:
                        <select name="tipoRolVoluntario">
                            <option>Todos</option>
                            <option>General</option>
                            <option>Perros</option>
                            <option>Gatos</option>
                            <option>Exóticos</option>
                        </select>
                    </label>
                    <label>Rol:
                        <select name="rolVoluntario">
                            <option>Todos</option>
                            <option>Adopciones</option>
                            <option>Rastros</option>
                            <option>Charlas</option>
                            <option>Voluntariado</option>
                        </select>
                    </label>
                </fieldset>


                <fieldset>
                    <legend><h4>Ordenar por:</h4></legend>
                    <p>
                        <input id='orden1' type='radio' name='orden' value='1'checked /><label for='orden1'>Nombre (A-Z)</label>
                        <input id='orden2' type='radio' name='orden' value='2'/><label for='orden2'>Provincia-Localidad (A-Z)</label>
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
            <th>DNI</th>
            <th>Nombre</th>
            <th>Provincia-Localidad</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td>123456789N</td>
                <td>Alfonso Pérez García</td>
                <td>Alicante - Alicante</td>
                <td>
                    <button type='submit' title='Ver Detalles' class='buEdit' onclick="openMultiOverlay('voluntario', 1)">
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
    if($voluntario && $type) {
        echo "<script type='text/javascript'> openMultiOverlay(\"".$type."\", ".$voluntario.");</script>";
    }
    ?>
@stop