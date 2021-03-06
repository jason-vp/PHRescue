@extends('master.mainLayout')

@section('content')
<h2>Paseadores</h2>

<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form id="Paseador">
            <a href="#!" class="innerDetails blackList">Marcar como persona non grata</a>
            <fieldset>

                <label for="'inDNIPaseador">DNI: <input id="inDNIPaseador" type="text" name="DNIPaseador"/></label>
                <label for='inNombrePaseador'>Nombre:
                    <input type='text' id="inNombrePaseador" name="nombrePaseador" class='w200px'></label>
                <label for='slPaisPaseador'>País:
                    <select id='slPaisPaseador' name='paisPaseador'>
                        <option value='1'>España</option>
                    </select></label>
                <label for='slProvinciaPaseador'>Provincia:
                    <select id="slProvinciaPaseador" name='provinciaPaseador' disabled>
                        <option value='1'>Alicante</option>
                    </select></label>
                <label for='slLocalidadPaseador'>Localidad:
                    <select id="slLocalidadPaseador" name='slLocalidadPaseador' disabled>
                        <option value='2'>Altea</option>
                        <option value='3'>San Vicente</option>
                        <option value='4'>Alicante</option>
                        <option value='5'>Orihuela</option>
                    </select></label>

                <label for='inDireccionPaseador' >Dirección:
                    <input type='text' name='direccionPaseador' id="inDireccionPaseador" class='w200px'></label>
                <label for='inTelefonoPaseador'>Teléfono:
                    <input type='tel' id="inTelefonoPaseador" name='telefonoPaseador'></label>

                <label for='inMailPaseador' >E-mail:
                    <input type='email' id="inMailPaseador" name='mailPaseador' class='w200px'></label>
                <label>Archivo DNI:
                    <input type="file" name="archivoDNI">
                </label>


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
                    <label for="inIDPaseador">DNI: <input id="inIDPaseador" type="text" name="IDPaseador"/></label>
                    <label for='inBNombrePaseador'>Nombre: <input id="inBNombrePaseador" type='text' name='inBNombrePaseador'/> </label>
                </p>

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
                    <button type='submit' title='Ver Detalles' class='buEdit' onclick="openMultiOverlay(1, 'Paseador')">
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
    if($paseador) {
        echo "<script type='text/javascript'> openOverlay(".$paseador.");</script>";
    }
    ?>
@stop