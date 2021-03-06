@extends('master.mainLayout')

@section('content')
<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay">
        <h3> Alta</h3>
        <form id="Seguimiento">

            <fieldset>

                <label>Fecha:
                    <input type="date" name="fechaContacto"/>
                </label>
                <label>Tipo:
                    <input type="text" name="tipoContacto"/>
                </label>
                <div>
                    <label for="taInformacionContacto">Información: </label>
                    <textarea rows="15" name="informacionContacto" id="taInformacionContacto"></textarea>
                </div>
                <button type='submit' class='boton'>Enviar</button>
            </fieldset>
        </form>

    </div>
</div>


<header id='heSeguimiento' class='reservado'>
    <span id='spEstadoHeader'>ABIERTO: 12-05-2015<button class="boton" type="button">Solicitar cierre</button></span>
    <h2> Seguimiento: Emiliano</h2>
    <span id="spAsignacionHeader">Asignado a: <a href="voluntarios.blade.php?id=1">Pepe</a></span>
</header>

<div class="borderUp">
    <table>
        <thead>
            <tr>
                <th>
                    Fecha contacto
                </th>
                <th>
                    Tipo contacto
                </th>
                <th>
                    Información
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <?php for($i=0; $i<3; $i++): ?>
        <tr>
            <td>
                25-07-2015
            </td>
            <td>
                Presencial.
            </td>
            <td>
                <p>
                    Marte ya empieza a sentirse "en casa", prueba hasta qué punto puede provocar a su adoptante y a los otros perros, y va aprendiendo muy rápido, lo cual a su adoptante le hace muy feliz. Dice que Marte realmente sabe aprovechar la oportunidad que se le ha brindado :-)
                    Fuera de casa está aprendiendo y explorando muchas cosas nuevas: plantas, animales etc.

                    La adoptante dice que está totalmente enamorada de Marte y que está super contenta de que Marte ahora sea parte de su vida...
                </p>
            </td>
            <td>
                <button type='button' title='Editar' onclick="openOverlay(1)" class='buEdit'></button>
                <button type='button' title='Eliminar' class='buDelete'></button>
            </td>
        </tr>
        <?php endfor; ?>

    </table>

    <button class="boton" type="button" onclick="openOverlay(-1)">Nueva entrada</button>
</div>
@stop