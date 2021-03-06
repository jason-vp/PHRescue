@extends('master.mainLayout')

@section('content')
<h2>Persona non grata</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay" class="multiOverlay">
        <h3> Alta</h3>
        <form id="adoptante">
            <div class="innerDetails blackList"><img src="/images/warningBL.png" title="Persona non grata" alt="Persona non grata"/>Persona non grata</div>
            <fieldset>

                <label for="'inDNIAdop">DNI: <input id="inDNIAdop" type="text" name="DNIAdop"/></label>
                <label for='inNombreAdoptante'>Nombre:
                    <input type='text' id="inNombreAdoptante" name="nombreAdoptante" class='w200px'></label>
                <label for='slPaisAdoptante'>País:
                    <select id='slPaisAdoptante' name='paisAdoptante'>
                        <option value='1'>España</option>
                    </select></label>
                <label for='slProvinciaAdoptante'>Provincia:
                    <select id="slProvinciaAdoptante" name='provinciaAdoptante' disabled>
                        <option value='1'>Alicante</option>
                    </select></label>
                <label for='slLocalidadAdoptante'>Localidad:
                    <select id="slLocalidadAdoptante" name='slLocalidadAdoptante' disabled>
                        <option value='2'>Altea</option>
                        <option value='3'>San Vicente</option>
                        <option value='4'>Alicante</option>
                        <option value='5'>Orihuela</option>
                    </select></label>

                <label for='inDireccionAdoptante' >Dirección:
                    <input type='text' name='direccionAdoptante' id="inDireccionAdoptante" class='w200px'></label>
                <label for='inTelefonoAdoptante'>Teléfono:
                    <input type='tel' id="inTelefonoAdoptante" name='telefonoAdoptante'></label>

                <label for='inMailAdoptante' >E-mail:
                    <input type='email' id="inMailAdoptante" name='mailAdoptante' class='w200px'></label>
                <div>
                <label for="taMotivoAdoptante">Motivo: </label>
                <textarea id="taMotivoAdoptante" name="motivoAdoptante" rows="5"></textarea></div>
                <div class="innerDetails">
                    <div>
                        <p>
                            Animales adoptados:</p>
                        <ul>
                            <?php for($i=0; $i<4; $i++): ?>
                                <li><a href="ficha?t=perros&id=1">Emiliano</a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>

                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>
        <form id="asociacion">
            <div class="innerDetails blackList"><img src="images/warningBL.png" title="Persona non grata" alt="Persona non grata"/>Persona non grata</div>
            <fieldset>
                <label for="'inIDAsoc">DNI: <input id="inIDAsoc" type="text" name="IDAsoc"/></label>
                <label for='inNombreAsociacion'>Nombre:
                    <input type='text' id="inNombreAsociacion" name="nombreAsociacion" class='w200px'></label>
                <label for='slPaisAsociacion'>País:
                    <select id='slPaisAsociacion' name='paisAsociacion'>
                        <option value='1'>España</option>
                    </select></label>
                <label for='inTelefonoAAsociacion'>Teléfono:
                    <input type='tel' id="inTelefonoAsociacion" name='telefonoAsociacion'></label>
                <label for='inMailAsociacion' >E-mail:
                    <input type='email' id="inMailAsociacion" name='mailAsociacion' class='w200px'></label>
                <div><h4>Contacto: </h4>
                    <label for="'inDNIContacto">DNI: <input id="inDNIContacto" type="text" name="DNIContacto"/></label>
                    <label for='inNombreContacto'>Nombre:
                        <input type='text' id="inNombreAdoptante" name="nombreContacto" class='w200px'></label>
                    <label for='inTelefonoContacto'>Teléfono:
                        <input type='tel' id="inTelefonoContacto" name='telefonoContacto'></label>

                    <label for='inMailContacto' >E-mail:
                        <input type='email' id="inMailContacto" name='mailContacto' class='w200px'></label>
                </div>
                <label for="taMotivoAsociacion">Motivo: </label>
                <textarea id="taMotivoAsociacion" name="motivoAdoptante" rows="5"></textarea>
                <div class="innerDetails">
                    <div>
                        <p>
                            Animales adoptados:</p>
                        <ul>
                            <?php for($i=0; $i<4; $i++): ?>
                                <li><a href="ficha?t=perros&id=1">Emiliano</a></li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>
    </div>
</div>

<div id='diAltaBusqueda' class='borderUp'>
    <div id="diAlta">
        <h3> Alta </h3>
        <button type="button" class="boton buOpenOverlay" onclick="openMultiOverlay('adoptante', -1)" >Alta adoptante</button>
        <button type="button" class="boton buOpenOverlay" onclick="openMultiOverlay('asociacion', -1)" >Alta asociación</button>
    </div>
    <div id="diBusqueda">
        <h3> Buscar </h3>
        <form class='center'>
            <fieldset>
                <p>
                    <label for="inIDAdop">DNI/IDAsoc: <input id="inIDAdop" type="text" name="IDAdop"/></label>
                    <label for='inBNombreAdop'>Nombre: <input id="inBNombreAdop" type='text' name='inBNombreAdop'/> </label>
                </p>
                <p><strong>Tipo:</strong>
                    <label for='cbTipo1'><input id='cbTipo1' type='checkbox' name='tipo' value='1' checked />Asociaciones</label>
                    <label for='cbTipo2'><input id='cbTipo2' type='checkbox' name='tipo' value='2' checked />Personas</label>
                </p>
                <fieldset>
                    <legend><h4>Ordenar por:</h4></legend>
                    <p>
                        <input id='orden1' type='radio' name='orden' value='1'checked /><label for='orden1'>Nombre (A-Z)</label>
                        <input id='orden2' type='radio' name='orden' value='2'/><label for='orden2'>Tipo (A-Z)</label>
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
            <th>DNI/IDAsorc</th>
            <th>Nombre</th>
            <th>País/Provincia</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <?php for($i=0; $i<5; $i++): ?>
            <tr>
                <td><img src="images/warningBL.png" class="blackList" title="Persona non grata" alt="Persona non grata"/>123456789N</td>
                <td><img src="images/warningBL.png" class="blackList" title="Persona non grata" alt="Persona non grata"/>Alfonso Pérez García</td>
                <td>Alicante</td>
                <td><button type='submit' title='Ver Detalles' class='buEdit' onclick="openMultiOverlay(1, 'Adoptante')"></button><button type='submit' title='Eliminar' class='buDelete'></button></td>
            </tr>
        <?php endfor; ?>
        <?php for($i=0; $i<5; $i++): ?>
            <tr>
                <td><img src="images/warningBL.png" class="blackList" title="Persona non grata" alt="Persona non grata"/>GAR</td>
                <td><img src="images/warningBL.png" class="blackList" title="Persona non grata" alt="Persona non grata"/>Germany Animal Rescue</td>
                <td>Alemania</td>
                <td><button type='submit' title='Ver Detalles' class='buEdit' onclick="openMultiOverlay('asociacion', 1)"></button><button type='submit' title='Eliminar' class='buDelete'></button></td>
            </tr>
        <?php endfor; ?>


    </table>

    <?php echo $paginador ?>

</div>
@stop

@section ('autoScripts')
    <?php
    if($type && $nonGrata) {
        echo "<script type='text/javascript'> openMultiOverlay(\"".$type. "\", ".$nonGrata.");</script>";
    }
    ?>
@stop