@extends('master.mainLayout')

@section('content')
<h2>Medicación</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form>
            <fieldset>
                <label for='inNombreMed'>Nombre: <input id="inNombreMed" type='text' name='inNombreMed' /></label>
                <label for='slTipoMed'>Tipo:
                    <select id='slTipoMed' name='slBTipoMed'>
                        <option value="0">Antibiotico</option>
                        <option value='1' > Antinflamatorio </option>
                        <option value='2' >Desparasitante</option>
                        <option value="3">Oftalmológico</option>
                        <option value="4">Sumplemento nutricional</option>
                        <option value="5">Gastrointestinal</option>
                        <option value="6">Oseo</option>
                        <option value="7">Cardiovascular</option>
                        <option value="8">Leishmanicida</option>
                        <option value="9">Otros</option>
                    </select>
                </label>
                <label for='slBAdministraciónMed'>Adminitración:
                    <select id='slBTipoMed' name='slBTipoMed'>
                        <option value="0">Oral</option>
                        <option value='1'>Subcutánea</option>
                        <option value='2'>Oftalmológica</option>
                        <option value="3">Cutánea</option>
                        <option value="4">Anal</option>
                        <option value="5">Intramuscular</option>
                        <option value="6">Intravenosa</option>
                    </select>
                </label>
                </br>
                <label for="taDescMed">Descripción: </label>
                <textarea id='taDescMed' name='taDescMed' maxlength='300' rows='4'></textarea>

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
                    <label for='inBNombreMed'>Nombre: <input id="inBNombreMed" type='text' name='inBNombreMed'/> </label>
                    <label for='slBTipoMed'>Tipo:
                    <select id='slBTipoMed' name='slBTipoMed'>
                        <option value="10" selected>Todos</option>
                        <option value="0">Antibiotico</option>
                        <option value='1' > Antinflamatorio </option>
                        <option value='2' >Desparasitante</option>
                        <option value="3">Oftalmológico</option>
                        <option value="4">Sumplemento nutricional</option>
                        <option value="5">Gastrointestinal</option>
                        <option value="6">Oseo</option>
                        <option value="7">Cardiovascular</option>
                        <option value="8">Leishmanicida</option>
                        <option value="9">Otros</option>
                    </select></label>
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
        <th>Tipo</th>
        <th>Administración</th>
        <th>Acciones</th>
        </tr>
        </thead>

        <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td>Glucantime</td>
                <td>Leishmanicida</td>
                <td>Subcutánea</td>
                <td><button type='submit' title='Ver Detalles' class='buEdit' onclick="openOverlay(1)"></button><button type='submit' title='Eliminar' class='buDelete'></button></td>
            </tr>
        <?php endfor; ?>

    </table>

    <?php echo $paginador ?>

</div>
@stop

@section ('autoScripts')
    <?php
    if($medicacion) {
        echo "<script type='text/javascript'> openOverlay(".$medicacion.");</script>";
    }
    ?>
@stop