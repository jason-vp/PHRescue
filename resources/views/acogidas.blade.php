@extends('master.mainLayout')

@section('content')
<h2>Acogidas</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form id="Acogida">
            <a href="#!" class="innerDetails blackList">Marcar como persona non grata</a>
            <fieldset>

                <label for="'inDNIAcogida">DNI: <input id="inDNIAcogida" type="text" name="DNIAcogida"/></label>
                <label for='inNombreAcogida'>Nombre:
                    <input type='text' id="inNombreAcogida" name="nombreAcogida" class='w200px'></label>
                <label for='slProvinciaAcogida'>Provincia:
                    <select id="slProvinciaAcogida" name='provinciaAcogida' disabled>
                        <option value='1'>Alicante</option>
                    </select></label>
                <label for='slLocalidadAcogida'>Localidad:
                    <select id="slLocalidadAcogida" name='slLocalidadAcogida' disabled>
                        <option value='2'>Altea</option>
                        <option value='3'>San Vicente</option>
                        <option value='4'>Alicante</option>
                        <option value='5'>Orihuela</option>
                    </select></label>

                <label for='inDireccionAcogida' >Dirección:
                    <input type='text' name='direccionAcogida' id="inDireccionAcogida" class='w200px'></label>
                <label for='inTelefonoAcogida'>Teléfono:
                    <input type='tel' id="inTelefonoAcogida" name='telefonoAcogida'></label>

                <label for='inMailAcogida' >E-mail:
                    <input type='email' id="inMailAcogida" name='mailAcogida' class='w200px'></label>
                <div>
                    <h4>Características:</h4>
                    <div>
                    <label for="cbAcogidaCalidad"><input type="checkbox" id="cbAcogidaCalidad" name="acogidaCalidad">Acogida de Calidad</label></div>
                    <div>
                    Acoge:

                    <label for="cbAcogePerros"><input type="checkbox" id="cbAcogePerros" name="acogePerros"/>Perros</label>
                    <label for="cbAcogeGatos"><input type="checkbox" id="cbAcogeGatos" name="acogeGatos"/>Gatos</label>
                    <label for="cbAcogeExoticos"><input type="checkbox" id="cbAcogeExoticos" name="acogeExoticos"/>Exóticos</label>
                </div>
                    <div>
                    Tiene:

                    <label for="cbTienePerros"><input type="checkbox" id="cbAcogePerros" name="tienePerros"/>Perros</label>
                    <label for="cbTieneGatos"><input type="checkbox" id="cbTieneGatos" name="tieneGatos"/>Gatos</label>
                    <label for="cbTieneExoticos"><input type="checkbox" id="cbTieneExoticos" name="tieneExoticos"/>Exóticos</label>
                    <label for="cbTieneNinyos"><input type="checkbox" id="cbTieneNinyos" name="tieneNinyos"/>Niños</label>
                </div>
                    <label for="taAditionalInfo">Información adicional:</label>
                    <textarea id="taAditionalInfo" name="aditionalInfo" rows="5"></textarea>
                </div>
                
                <div class="innerDetails">
                    <div>
                        <p>
                            Animales acogidos:</p>
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
        <button type="button" class="boton buOpenOverlay" onclick="openOverlay(-1)" >Alta</button>
       
    </div>
    <div id="diBusqueda">
        <h3> Buscar </h3>
        <form class='center'>
            <fieldset>
                <p>
                    <label for="inIDAcogida">DNI: <input id="inIDAcogida" type="text" name="IDAcogida"/></label>
                    <label for='inBNombreAcogida'>Nombre: <input id="inBNombreAcogida" type='text' name='inBNombreAcogida'/> </label>
                    <label for='slProvinciaAcogida'>Provincia:
                        <select id="slProvinciaAcogida" name='provinciaAcogida'>
                            <option value='1'>Todas</option>
                        </select></label>
                    <label for='slLocalidadAcogida'>Localidad:
                        <select id="slLocalidadAcogida" name='slLocalidadAcogida'>
                            <option value='2'>Todas</option>
                            <option value='3'>San Vicente</option>
                            <option value='4'>Alicante</option>
                            <option value='5'>Orihuela</option>
                        </select></label>

                </p>
                <div>
                    <h4>Características:</h4>
                    <div>
                        <label for="cbAcogidaCalidad"><input type="checkbox" id="cbAcogidaCalidad" name="acogidaCalidad">Solo Acogidas de Calidad</label></div>
                    <div>
                        Acoge:
                        <label for="cbAcogePerros"><input type="checkbox" id="cbAcogePerros" name="acogePerros" checked/>Perros</label>
                        <label for="cbAcogeGatos"><input type="checkbox" id="cbAcogeGatos" name="acogeGatos" checked/>Gatos</label>
                        <label for="cbAcogeExoticos"><input type="checkbox" id="cbAcogeExoticos" name="acogeExoticos" checked/>Exóticos</label>
                    </div>
                    <div>
                        Tiene:
                        <label for="cbTieneNA"><input type="checkbox" id="cbTieneNA" name="tieneNA" onchange="toggleDisable(this, 'fsBTiene', true)" checked/>N/A</label>
                        <fieldset id="fsBTiene" disabled>
                        <label for="cbTienePerros"><input type="checkbox" id="cbTienePerros" name="tienePerros"/>Perros</label>
                        <label for="cbTieneGatos"><input type="checkbox" id="cbTieneGatos" name="tieneGatos"/>Gatos</label>
                        <label for="cbTieneExoticos"><input type="checkbox" id="cbTieneExoticos" name="tieneExoticos"/>Exóticos</label>
                        <label for="cbTieneNinyos"><input type="checkbox" id="cbTieneNinyos" name="tieneNinyos"/>Niños</label>
                        </fieldset>
                    </div>
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
            <th>Nombre</th>
            <th>Acoge:</br>Perros-Gatos-Exóticos</th>
            <th>Provincia/Localidad</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td>Alfonso Pérez García</td>
                <td>Si - No - No</td>
                <td>Alicante/Alicante</td>
                <td><button type='submit' title='Ver Detalles' class='buEdit' onclick="openOverlay(1)"></button><button type='submit' title='Eliminar' class='buDelete'></button></td>
            </tr>
        <?php endfor; ?>
    </table>

    <?php echo $paginador ?>

</div>
@stop

@section ('autoScripts')
<?php
    if($acogida) {
        echo "<script type='text/javascript'> openOverlay(".$acogida.");</script>";
    }
?>
@stop