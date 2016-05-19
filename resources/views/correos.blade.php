@extends('master.mainLayout')

@section('content')
<h2>Consulta correos</h2>

<div class='borderUp'>

    <div>
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
                <input type='submit' class='boton' value='Buscar'/>
            </fieldset>
        </form>
    </div>
</div>
<div id='resultados' class='borderUp'>
    <h3>Resultados</h3>
    <textarea><?php for($i=0; $i<60; $i++) {
            echo "José Pérez García <jose1984@ficticio.shelt>,";
        }
        echo "José Pérez García <josefulgencio@ficticion.shelt>";
        ?>
    </textarea>

</div>
@stop