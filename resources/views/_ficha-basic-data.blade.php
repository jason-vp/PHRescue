	<div id='datos'>
		<form>
			<fieldset>
				<div><span class='div-ed-datos'><label for='hab-ed-datos'>Habilitar edición</label><input type='checkbox' id='hab-ed-datos' name='hab-ed-datos' onChange='toggleDisable(this, "form-datos")'></span><h3><legend> Datos </legend></h3></div>

                <fieldset id='form-datos' disabled='true'>
                    <label for='nombre'>Nombre:
                        <input type='text' name='nombre' id='nombre' value=<?php echo "'". $animal . "'" ?>>
                    </label>
                    <?php if($exoticos): ?>
                        <label for='especie' ><strong > Especie:</strong >
                            <select id = 'especie' name = 'raza' >
                                <option value = '1' > Cualquiera </option >
                                <option value = '2' > Ratón</option >
                                <option value = '3' > Cerdo</option >
                                <option value = '4' > Hamster</option >
                            </select ></label>
                    <?php endif; ?>
                    <label for='raza'>Raza:
                        <select id='raza' name='raza'>
                                <option value='2' selected>Mestizo</option>
                                <option value='3'>Mastín</option>
                                <option value='4'>Fox Terrier</option>
                                <option value='5'>Chihuahua</option>
                        </select>
                    </label>
				<strong>Sexo:</strong>
                    <label for='sexo1'><input id='sexo1' type='radio' name='sexo' value='1' checked>M</label>
                    <label for='sexo2'><input id='sexo2' type='radio' name='sexo' value='2'>H</label>

				    <label for='fecha-nacimiento'>Fecha Nacimiento:<input type='date' name='fecha-nacimiento' id='fecha-nacimiento'  class='inDate' value='2010-03-04'></label>
                    <label for='edad'>Edad:<input id='edad' type='text' name='edad' value='2a 4m'></label>
                    <?php if($gatos): ?>
                        <label for='slManto'>Manto:
                            <select id='slManto' name='raza'>
                                <option value='2'>Tortuga</option>
                                <option value='3'>Tabby</option>
                                <option value='4'>Moteado</option>
                            </select></label>
                    <?php endif; ?>
                    <label for='color'>Color:
                        <select id='color' name='color'>
                                <option value='2'>Negro</option>
                                <option value='3'>Canela</option>
                                <option value='4' selected>Marrón</option>
                                <option value='5'>Blanco/Negro</option>
                        </select>
                    </label>

				<label for='peso'>Peso:<input type='number' name='peso' id='peso'  min='0' max='80' step='0.01' value='15'></label>
				<?php if(!$gatos): ?>
                <label for='tam'>Tamaño:
                    <select id='tam' name='tam'>
                            <option value='2'>Pequeño</option>
                            <option value='3' selected>Mediano</option>
                            <option value='4'>Grande</option>
                            <option value='5'>Muy Grande</option>
                    </select>
                </label>
                <?php endif; ?>
				<label for='fecha-entrada'>Fecha Entrada:<input type='date' name='fecha-entrada' id='fecha-entrada' class='inDate' value='2012-02-20'></label>

				<p><strong>Medidas:</strong>
				    <label for='medida-suelo'>Cruz-Suelo:<input type='number' id='medida-suelo' name='medida-suelo'  min='5' max='150' step='1' value='30'>cm </label>
                    <label for='medida-cola'>Cruz-Cola:</label> <input type='number' id='medida-cola' name='medida-cola'  min='5' max='150' step='1' value='30'>cm
				</p>
				<label for='chip'>Nº Microchip:<input type='text' name='chip' id='chip' value='111111111AAAA'></label>
				<label for='fecha-chip'>Fecha Microchip:<input type='date' name='fecha-chip' id='fecha-chip' value='2010-01-01'></label>

				<label for='pasaporte'>Nº Pasaporte<input type='text' name='pasaporte' id='pasaporte' value='AA1111111111'></label>
                <label for='inPub'>Publicitar:<input id='inPub' type='checkbox' name='inPub' checked></label>

				<p>Encontrado en:</p>
				<label for='localidad'>Localidad:
                    <select id='localidad' name='localidad'>
                            <option value='2'>Altea</option>
                            <option value='3' selected>San Vicente</option>
                            <option value='4'>Alicante</option>
                            <option value='5'>Orihuela</option>
                    </select>
                </label>
				<label for='condiciones'>Condiciones:</label><textarea id='condiciones' name='condiciones' maxlength='300' rows='4'>Entregado por personas externas al albergue que se lo encontraron.</textarea>

				<p>Carácter:</p>
				<label for='caracter'>Tipo:
                    <select id='caracter' name='caracter'>
                            <option value='2'>Tranquilo</option>
                            <option value='3' selected>Enérgico</option>
                            <option value='4'>Dominante</option>
                            <option value='5'>Miedoso</option>
                    </select>
                </label>
				<label for='text-caracter'>Observaciones carácter:</label>
				    <textarea id='text-caracter' name='text-caracter' maxlength='300' rows='4'>Un poco macarra con otros perros. Muy bueno y obediente con humanos.</textarea>

				<label for='historia'>Historia y otras observaciones:</br> </label>
				<textarea id='historia' name='historia' maxlength='700' rows='9'>Emiliano llegó a nuestro albergue hace ya un año, ha estado reservado durante mucho tiempo y sin embargo, finalmente, su adopción se ha anulado. Es un perro cariñoso, con gran vitalidad, muy divertido, que no se merece seguir esperando más tiempo su oportunidad de conocer un verdadero hogar… ¿Quieres ofrecérselo tú? ¡Ven a conocerlo!  </textarea>

                <button type='reset' id='buResetDatos' name='buResetDatos' class='boton'>Reset</button>
				<button type='submit' id='buDatos' name='buDatos' class='boton'>Modificar</button>

			</fieldset>
		</form>
	</div>
	
</div>