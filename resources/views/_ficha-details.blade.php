<div id="botonera" class="borderUp">
    <h3>Acceso rápido</h3>
    <a href="#dCastracion"><button type="button" id="buMVCastracion" class="boton">Cast/Ester</button></a>
    <a href="#dVideos"><button type="button" id="buMVVideos" class="boton">Videos</button></a>
    <a href="#dDesparasitacion"><button type="button" id="buMVDesparasitacion" class="boton">Desparasitación</button></a>
    <a href="#dAnaliticas"><button type="button" id="buMVAnaliticas" class="boton">Analíticas</button></a>
    <a href="#dVacunas"><button type="button" id="buMVVacunas" class="boton">Vacunas</button></a>
    <a href="#dTratamientos"><button type="button" id="buMVTratamientos" class="boton">Tratamientos</button></a>
    <a href="#dHistorico"><button type="button" id="buMVHistorico" class="boton">Histórico</button></a>
    <a href="#dDocumentacion"><button type="button" id="buMVDocumentacion" class="boton">Documentos</button></a>
</div>



<div id='estado' class='borderUp'>
	<form>
	<fieldset>
	<div><span class='div-ed-datos'><label for='hab-ed-estado'>Habilitar edición</label><input type='checkbox' id='hab-ed-estado' name='hab-ed-estado' onChange='toggleDisable(this, "fsEstadoLugar")'></span><h3><legend> Estado </legend></h3></div>

    <fieldset id="fsEstadoLugar" disabled>
        <div id="divEstado">
		<fieldset id='form-estado' >
		<div class='center'>
		<p>
		<select id='sEstado' name='sEstado' class='enAdopcion' onchange='cambioEstado(this.selectedOptions)'>
			<option value='1' class='enAdopcion' selected>En Adopción</option>
			<option value='2' class='reservado'>Reservado</option>
			<option value='3' class='adoptado'>Adoptado</option>
			<option value='4' class='difunto' >Difunto</option>
		</select>
		<label for='fecha-estado'>Desde:</label>
		<input type='date' class='inDate' name='fecha-estado' id='fecha-estado' value='2012-02-10'>
		</p>
		</div>
	    </fieldset>
	
        <fieldset id='fsRadioLugar'>
        <h4><legend>Lugar:</legend></h4>
            <div class='center'>
                <p>Seleccionar lugar:
                <label for='inRadiolugar1' class='lRadioLugar'><input type='radio' name="inRadioLugar" id="inRadioLugar1" value='1' onclick='mostrarLugar(this.value)' checked>Albergue</label>
                <label for='inRadioLugar2' class='lRadioLugar'><input type='radio' name='inRadioLugar' id="inRadioLugar2" value='2' onclick='mostrarLugar(this.value)'>Acogida</label>
                <label for='inRadioLugar3' class='lRadioLugar noDisplay'><input type='radio' name='inRadioLugar' id="inRadioLugar3" value='3' onclick='mostrarLugar(this.value)'>Acogida Preadoptiva</label>
            </div>
        </fieldset>
    </div>

	<fieldset id='fsLugar'>
		<h4><legend>Datos lugar: </legend></h4>
			
		<fieldset id="fsAcogida" class='noDisplay'>
			<h5><legend>Datos casa acogida</legend></h5>
			<div id='dAcogida' class='center'>
			<label for='inDNIAcogida'>DNI:
			<input type='text' id='inDNIAcogida' name='inDNIAcogida'></label>
			<fieldset id='fsDatosAcogida' disabled>
				<label for='nombre-acogida'>Nombre:
				<input type='text' id='nombre-acogida' class='w200px'></label>
				<label for='inFechaAcogida'>Fecha adopción:
				<input type='date' id="inFechaAcogida" class='inDate' name='inFechaAcogida'></label>
				</br>
				<label for='pais-acogida'>País:
				<select id='pais-acogida' name='pais-acogida'>
						<option value='1'>España</option>
				</select></label>
				<label for='provincia-acogida'>Provincia:
				<select id='provincia-acogida' name='provincia-acogida'>
						<option value='1'>Alicante</option>
				</select></label>
				<label for='slLocalidadAcogida'>Localidad:
				<select id='slLocalidadAcogida' name='slLocalidadAcogida'>
						<option value='2'>Altea</option>
						<option value='3'>San Vicente</option>
						<option value='4'>Alicante</option>
						<option value='5'>Orihuela</option>
				</select></label>

				<label for='direccion-acogida' >Dirección:
				<input type='text' name='direccion-acogida' id='direccion-acogida' class='w200px'></label>
				<label for='telefono-acogida'>Teléfono:
				<input type='tel' id='telefono-acogida' name='telefono-acogida'></label>

				<label for='email-acogida'>E-mail:
				<input type='email' id='email-acogida' name='email-acogida' class='w200px'></label>
		    </fieldset>
		</div>
		</fieldset>

		<fieldset id="fsAlbergue" class='datosLugarSel'>
		<h5><legend>En albergue</legend></h5>
		<div id='div-albergue' class='center'>
			<label for='localidad-albergue'>Localidad albergue:
			<select id='localidad-albergue'>
				<option value='1'>San Vicente</option>
			</select></label>
		</div>
		</fieldset>

        <fieldset id='fsAdoptante' class='noDisplay'>
            <legend><h5>Datos adoptante</h5></legend>
            <div id='div-adoptante' class='center'>
                <label for='idAdoptante'>DNI/IDAsoc:
                    <input type='text' id="idAdoptante" name='idAdoptante'></label>
                <fieldset id='datos-adoptante' disabled>
                    <label for='inNombreAdoptante'>Nombre:
                        <input type='text' id="inNombreAdoptante" name="nombreAdoptante" class='w200px'></label>
                    <label for='inFechaAdopcion'>Fecha adopción:
                        <input type='date' id="inFechaAdopcion" class='inDate' name='inFechaAdopcion'></label>

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

                </fieldset>
            </div>
        </fieldset>
	</fieldset>
    <div class='center' > <button type='submit' name="inEstado" id="inEstado" class= 'boton' > Modificar </button></div>
    </fieldset>
	</fieldset>
	</form>
</div>

<div id='dCastracion' class='borderUp'>
	<form>
	<fieldset>
		<div><span class='div-ed-datos'><label for='hab-ed-castracion'>Habilitar edición</label><input type='checkbox' id='hab-ed-castracion' name='hab-ed-castracion' onChange='toggleDisable(this, "form-castracion")'></span><h3><legend> Castración/Esterilización </legend></h3></div>
		<fieldset id='form-castracion' disabled>
			<div class='center'>
			<label for='fecha-cast' class='realizado'>Realizada el&nbsp</label><input type='date' id='fecha-cast' name='fecha-est' class='inDate' value='2012-01-01'>
			<label for='slVeterinario' class='realizado'>por</label>
			<select name='veterinario' id="slVeterinario">
				<option value='1' selected>Juan - Sol y Luz</option>
				<option value='1'>Cristina - El Drac</option>
			</select>
			<button type='submit' class='buDelete'></button>
			</div>
			<button type='submit' class='boton' name='buCast' id='buCast'>Modificar</button>
		</fieldset>
	</fieldset>
	</form>
</div>
<div id='dVideos' class='borderUp'>
	<form>
	<fieldset>
		<legend><h3>Videos</h3></legend>
		<table id='tbVideos'>
			<thead><tr>
				<th>Título/Link</th>
				<th>Descripción</th>
				<th>Fecha</th>
                <th>Acciones</th>
			</tr></thead>
			<tr>
				<td><a href='http://www.youtube.com/watch?v=vMe-qe_ej_8' target="_blank">Emiliano en Asoka</a></td>
				<td>Video musical de presentación con fotos y clips de Emiliano paseando y jugando.</td>
				<td>24-06-2012</td>
                <td><button type='button' title='Editar' class='buEdit' onclick="openMultiOverlay('Video', 1)"></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
		</table>
        <button type="button" id="buVideos" onclick="openMultiOverlay('Video', -1)" class="boton">Añadir</button>
        </fieldset>
		</form>
</div>

<div id="dDesparasitacion" class='borderUp'>
	<form>
	<fieldset>
		<legend><h3>Desparasitación</h3></legend>
		<table id='tbDesparasitacion'>
			<thead><tr>
				<th>Producto</th>
				<th>Fecha</th>
                <th>Acciones</th>
			</tr></thead>
			<tr>
				<td><a href='medicacion.php?id=1'>Zipyran Plus</a></td>
				<td>01-01-2012</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Desparasitación', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
			<tr>
				<td><a href='medicacion.php?id=1'>Frontline</a></td>
				<td>01-05-2012</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Desparasitación', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
			<tr>
				<td><a href='medicacion.php?id=1'>Fronline</a></td>
				<td>01-09-2012</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Desparasitación', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
		</table>
        <button type="button" id="buDesparasitaciones" onclick="openMultiOverlay('Desparasitación', -1)" class="boton">Añadir</button>

		</fieldset>
		</form>
</div>

<div id='dAnaliticas' class='borderUp'>
	<form>
	<fieldset>
		<legend><h3>Analíticas</h3></legend>
		<table id='tabla-analiticas'>
			<thead><tr>
				<th>Analítica</th>
				<th>Resultado</th>
				<th>PDF</th>
				<th>Fecha</th>
                <th>Acciones</th>
			</tr></thead>
			<tr>
				<td>Leishmaniosis</td>
				<td class='tdPositivo'>Positivo</td>
				<td><a href=''>analitica.pdf</a></td>
				<td>01-01-2012</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Analítica', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
			<tr>
				<td>Leucemia</td>
				<td class='tdNegativo'>Negativo</td>
				<td><a href=''>analitica2.pdf</a></td>
				<td>01-01-2012</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Analítica', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
		</table>
        <button type="button" id="buAnaliticas" onclick="openMultiOverlay('Analítica', -1)" class="boton">Añadir</button>
		</fieldset>
		</form>
</div>

<div id='dVacunas' class='borderUp'>
	<form>
	<fieldset>
		<legend><h3>Vacunas</h3></legend>
		<table id='tabla-vacunas'>
			<thead><tr>
				<th>Vacuna</th>
				<th>Fecha</th>
                <th>Acciones</th>
			</tr></thead>
			<tr>
				<td><a href='medicacion.php?id=1'>Rabia</a></td>
				<td>01-01-2012</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Vacuna', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
		</table>
        <button type="button" id="buVacunas" onclick="openMultiOverlay('Vacuna', -1)" class="boton">Añadir</button>
		</fieldset>
		</form>
</div>


<div id='dTratamientos' class='borderUp'>
	<form>
	<fieldset>
		<h3><legend>Tratamientos</legend></h3>
		<table id='tabla-tratamientos'>
			<thead><tr>
				<th>Tratamiento</th>
				<th>Dosis</th>
				<th>Observaciones</th>
				<th>Fecha inicio</br>Fecha fin</th>
				<th>Veterinario</th>
                <th>Acciones</th>
			</tr></thead>
			<tr>
				<td><a href='medicacion.php?id=1'>Maxitrol</a></td>
				<td>2 gotas cada 8h</td>
				<td>Conjuntivitis, ojo derecho.</td>
				<td>01-01-2012</br>08-01-2012</td>
				<td><a href='veterinarios.php?id=1'>Juan - Sol y Luz</a></td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Tratamiento', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
		</table>

        <button type="button" id="buTratamientos" onclick="openMultiOverlay('Tratamiento', -1)" class="boton">Añadir</button>
		</fieldset>
		</form>
</div>

<div id='dDocumentacion' class='borderUp'>
    <form>
        <fieldset>
            <legend><h3>Documentación</h3></legend>
            <table id='tbDocumentacion'>
                <thead><tr>
                <th>Documento</th>
                <th>Descripción</th>
                <th>PDF</th>
                <th>Acciones</th>
                </tr></thead>
                <tr>
                    <td>Pasaporte</td>
                    <td>Pasaporte. Fecha caducidad: 15-05-2020</td>
                    <td><a href=''>pasaporte.pdf</a></td>
                    <td><button type='button' title='Editar' onclick="openMultiOverlay('Documentación', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
                </tr>
            </table>
            <button type="button" id="buADocumentacion" onclick="openMultiOverlay('Documentación', -1)" class="boton">Añadir</button>
        </fieldset>
    </form>

</div>

<div id="dHistorico" class='borderUp'>
	<form>
	<fieldset>
		<legend><h3>Histórico</h3></legend>
		<table id='tbHistorico'>
			<thead><tr>
                <th>Estado</th>
				<th>Desde</th>
				<th>Hasta</th>
                <th>Adoptante</th>
                <th>Motivo cancelación</th>
                <th>Acciones</th>
			</tr></thead>
			<tr>
                <td>Adoptado</td>
                <td>01-01-2012</td>
                <td>01-01-2013</td>
				<td><a href='adoptantes.php?id=1' target="_blank">Jonh Smith</a></td>
				<td>Mudanza fuera del país por cambio de identidad.</td>
                <td><button type='button' title='Editar' onclick="openMultiOverlay('Histórico', 1)" class='buEdit'></button><button type='button' title='Eliminar' class='buDelete'></button></td>
			</tr>
		</table>
	</fieldset>
	</form>
</div>



