@extends('master.mainLayout')

@section('content')
<h2>Veterinarios</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form>
            <fieldset>
                <label for="'inDNIVet">DNI: <input id="inDNIVet" type="text" name="DNIVet"/></label>
                <label for='inNombreVet'>Nombre: <input id="inNombreVet" type='text' name='inNombreVet' /></label>
                <label for='inTelfVet'>Teléfono:  <input id="inTelfVet" type='tel' name='inTelfVet'/></label>
                <label for="inMailVet">Email: <input id="inMailVet" type="email" name="inMailVet"/></label>
                <label for="slEspecialidadVet">Especialidad:<select id='slEspecialidadVet' name='slEspecialidadVet'>
                    <option value="0">N/A</option>
                    <option value='1' > Perros </option>
                    <option value='2' >Gatos</option>
                    <option value="3">Exóticos</option>
                </select></label>
                <label for='slClinicaVet'>Clínica:
                <select id="slClinicaVet" name='slAClinicaVet'>
                    <option></option>
                    <option value='1' > Sol y Luz </option>
                    <option value='2' >El Drac</option>
                </select></label>
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
                    <label for='inBNombreVet'>Nombre: <input id="inBNombreVet" type='text' name='inBNombreVet'/> </label>
                <label for="slEspecialidadVet">Especialidad:<select id='slEspecialidadVet' name='slEspecialidadVet'>
                        <option value="0">Todas</option>
                        <option value='1' > Perros </option>
                        <option value='2' >Gatos</option>
                        <option value="3">Exóticos</option>
                    </select></label>
                <label for='clinica'>Clínica:
                    <select id='clinica' name='clinica-a'>
                        <option value="0">Todas</option>
                            <option value='1' > Sol y Luz </option>
                            <option value='2' >El Drac</option>
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
			<th>Especialidad</th>
			<th>Clínica</th>
            <th>Acciones</th>
        </tr>
		</thead>

        <?php for($i=0; $i<10; $i++): ?>
            <tr>
                <td>Alfonso Pérez García</td>
                <td>Perros</td>
                <td><a href="clinicas.php?id=1">Sol y Luz</a></td>
                <td><button type='submit' title='Ver Detalles' class='buEdit' onclick="openOverlay(1)"></button><button type='submit' title='Eliminar' class='buDelete'></button></td>
            </tr>
        <?php endfor; ?>

	</table>

    <?php echo $paginador ?>

	</div>
@stop

@section ('autoScripts')
    <?php
    if($veterinario) {
        echo "<script type='text/javascript'> openOverlay(".$veterinario.");</script>";
    }
    ?>
@stop