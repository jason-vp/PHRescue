@extends('master.mainLayout')

@section('content')
<h2>Alta <?php echo $current_tab ?></h2>

<div class='borderUp'>
	<div id='dAlta' class="center">
		<form>
            <fieldset id='form-datos'>
            <label for='nombre'>Nombre: <input type='text' name='nombre' id='nombre' ></label>
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
                    <option value='2'>Mestizo</option>
                    <option value='3'>Siames</option>
                    <option value='4'>Azul Ruso</option>
                    <option value='5'>Persa</option>
            </select></label>
            <strong>Sexo:</strong>
            <label for='sexo1'><input id='sexo1' type='radio' name='sexo' value='1'>M</label>
            <label for='sexo2'><input id='sexo2' type='radio' name='sexo' value='2'>H</label>
            <label for='fecha-nacimiento'>Fecha Nacimiento:<input type='date' name='fecha-nacimiento' id='fecha-nacimiento'  class='inDate' ></label>
            <label for='edad'>Edad:</label><input id='edad' type='text' name='edad'>
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
                    <option value='4'>Marrón</option>
                    <option value='5'>Blanco/Negro</option>
            </select></label>

            <label for='peso'>Peso:<input type='number' name='peso' id='peso'   min='0' max='80' step='0.01'></label>
            <?php if(!$gatos): ?>
                <label for='tam'>Tamaño:
                <select id='tam' name='tam'>
                        <option value='2'>Pequeño</option>
                        <option value='3'>Mediano</option>
                        <option value='4'>Grande</option>
                        <option value='5'>Muy Grande</option>
                </select></label>
            <?php endif; ?>
            <label for='fecha-entrada'>Fecha Entrada:<input type='date' name='fecha-entrada' id='fecha-entrada' class='inDate'></label>

            <p><strong>Medidas:</strong>
            <label for='medida-suelo'>Cruz-Suelo: <input type='number' id='medida-suelo' name='medida-suelo'  min='5' max='150' step='1' ></label>
            <label for='medida-cola'>Cruz-Cola: <input type='number' id='medida-cola' name='medida-cola'  min='5' max='150' step='1' >cm</label>
            </p>
            <label for='chip'>Nº Microchip:<input type='text' name='chip' id='chip' ></label>
            <label for='fecha-chip'>Fecha Microchip:<input type='date' name='fecha-chip' id='fecha-chip'></label>

            <label for='pasaporte'>Nº Pasaporte<input type='text' name='pasaporte' id='pasaporte'></label>

            <label for='inPub'>Publicitar:<input id='inPub' type='checkbox' name='inPub' checked></label>

            <p>Encontrado en:</p>
            <label for='localidad'>Localidad:
            <select id='localidad' name='localidad'>
                    <option value='2'>Altea</option>
                    <option value='3'>San Vicente</option>
                    <option value='4'>Alicante</option>
                    <option value='5'>Orihuela</option>
            </select></label>
            <label for='condiciones'>Condiciones:</label><textarea id='condiciones' name='condiciones' maxlength='300' rows='4'></textarea>

            <label for='nueva-foto'>Subir una foto:
            <input type='file' id='nueva-foto' name='nueva-foto'></label>

            <button type='submit' id='buAlta' name='buAlta' class='boton'>Enviar</button>
        </fieldset>
        </form>
	</div>
</div>
@stop