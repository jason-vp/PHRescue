@extends('master.mainLayout')

@section('content')
<h2>Clínicas</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form>
            <fieldset>
                <label for='inNombreClin'>Nombre: <input id="inNombreClin" type='text' name='inNombreClin' /></label>
                <label for='inTelfClin'>Teléfono:  <input id="inTelClin" type='tel' name='inTelfClin'/></label>
                <label for='inTelfClinUrg'>Teléfono urgencias: <input id="inTelfClinUrg" type="tel" name="inTelfClinUrg"/></label>
                <label for="inMailClin">Email: <input id="inMailClin" type="email" name="inMailClin"/></label>
                <label for="inEspClin">Especialidad:
                    <select id="inEspClin" />
                        <option></option>
                        <option value="1">Perros</option>
                        <option value="2">Gatos</option>
                        <option value="3">Exóticos</option>
                    </select>
                </label>
                <div id="innerList">
                    <div>
                    <p>
                    Veterinarios:</p>
                        <ul>
                            <?php for($i=0; $i<4; $i++): ?>
                                <li><a href="veterinarios?id=1">Pedro Pérez García</a></li>
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
                    <label for='inBNombreClin'>Nombre: <input id="inBNombreClin" type='text' name='inBNombreClin'/> </label>
                    <label for='slEspecialidadClin'>Especialidad:</label>
                    <select id='slEspecialidadClin' name='slEspecialidadClin'>
                        <option value="0">Todas</option>
                        <option value='1' > Perros </option>
                        <option value='2' >Gatos</option>
                        <option value="3">Exóticos</option>
                    </select>
                <fieldset>
                    <legend><h4>Ordenar por:</h4></legend>
                    <p>
                        <input id='orden1' type='radio' name='orden' value='1'checked /><label for='orden1'>Nombre (A-Z)</label>
                        <input id='orden2' type='radio' name='orden' value='2'/><label for='orden2'>Especialidad (A-Z)</label>
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
        <th>Teléfono</th>
        <th>Especialidad</th>
        <th>Acciones</th>
        </tr>
        </thead>

        <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td>Sol y Luz</td>
                <td>655 55 55 55</td>
                <td>Perros</td>
                <td><button type='submit' title='Ver Detalles' class='buEdit' onclick="openOverlay(1)"></button><button type='submit' title='Eliminar' class='buDelete'></button></td>
            </tr>
        <?php endfor; ?>

    </table>

    <?php echo $paginador ?>

</div>
@stop

@section ('autoScripts')
    <?php
    if($clinica) {
        echo "<script type='text/javascript'> openOverlay(".$clinica.");</script>";
    }
    ?>
@stop
