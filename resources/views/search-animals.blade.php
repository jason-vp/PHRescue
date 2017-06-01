@extends('master.mainLayout')

@section('content')
<h2>Consulta <?php echo $current_tab ?></h2>

<div id='busqueda' class='borderUp'>

	<form class='center'>
		<fieldset>
            <legend><h3> Buscar </h3></legend>
			<p>
				<label for='nombre-a'><strong>Nombre:</strong>  <input id='nombre-a' type='text' name='nombre-animal'/> </label>
				<span><strong>Sexo:</strong>
					<label for='sexo1'><input id='sexo1'  type='checkbox' name='sexo' value='1' checked />M</label>
					<label for='sexo2'><input id='sexo2'  type='checkbox' name='sexo' value='2' checked />H</label>
				</span>
                <?php if(!$gatos): ?>
				<span><strong>Tamaño:</strong>
					<label for='tam1'><input id='tam1' type='checkbox' name='tam' value='1' checked />Pequeño</label>
					<label for='tam2'><input id='tam2' type='checkbox' name='tam' value='2' checked />Mediano</label>
					<label for='tam3'><input id='tam3' type='checkbox' name='tam' value='3' checked />Grande</label>
					<label for='tam4'><input id='tam4' type='checkbox' name='tam' value='4' checked />Muy Grande</label>
				</span>
                <?php endif; ?>

				<label for="inEdadMin"><strong>Edad:</strong>
				Entre <input id='inEdadMin'  type='number' min='0' max='17' step='1' value='0' name='edadMin' /> y <input id='edadmax'  type='number' min='1' max='18' step='1' value='18' name='edad2' /> años
                </label>
				<label for="inPesoMin"><strong>Peso:</strong>
				Entre <input id='inPesoMin'  type='number' min='0' max='80' step='0.01' value='0' name='pesoMin'/> y <input id='pesomax'  type='number' min='0' max='80' step='1' value='80' name='peso2'/> kg
				</label
                <?php if($exoticos): ?>
                    <label for="slEspecie">Especie:
                        <select id="slEspecie" name="especie">
                            <option value="-1">Todas</option>
                            <option value="0">Ratón</option>
                            <option value="1">Conejo</option>
                        </select>
                    </label>
                <?php endif; ?>
				 <label for='raza'><strong>Raza:</strong>
                     <select id='raza' name='raza'>
						<option value='1'>Todas</option>
						<option value='2'>Mestizo</option>
						<option value='3'>Mastín</option>
						<option value='4'>Fox Terrier</option>
						<option value='5'>Chihuahua</option>
					</select>
                 </label>
				
				<label for='color'><strong>Color:</strong>
                    <select id='color' name='color'>
						<option value='1'>Cualquiera</option>
						<option value='2'>Negro</option>
						<option value='3'>Canela</option>
						<option value='4'>Marrón</option>
						<option value='5'>Blanco/Negro</option>
					</select>
                </label>
			</p>
			
			<fieldset>
				<legend><h4>Estado:</h4></legend>
				<p>
                    <label for='estado1'><input id='estado1' type='checkbox' name='lugar' value='En adopcion' checked />En adopción</label>
                    <label for='estado3'><input id='estado2' type='checkbox' name='lugar' value='Reservado'/>Reservado</label>
                    <label for='estado4'><input id='estado3' type='checkbox' name='lugar' value='Adoptado'/>Adoptado</label>
                    <label for='estado5'><input id='estado4' type='checkbox' name='lugar' value='Difunto'/>Difunto</label>
				</p>
			</fieldset>
			<fieldset>
				<legend><h4>Ordenar por:</h4></legend>
				<p>
                    <label for='orden1'><input id='orden1' type='radio' name='orden' value='1'checked />Fecha entrada</label>
                    <label for='orden3'><input id='orden3' type='radio' name='orden' value='2' />Nombre (A-Z)</label>
                    <label for='orden4'><input id='orden4' type='radio' name='orden' value='3'/>Nombre (Z-A)</label>
                    <label for='orden5'><input id='orden5' type='radio' name='orden' value='4'/>Edad (Asc.)</label>
                    <label for='orden6'><input id='orden6' type='radio' name='orden' value='5'/>Edad (Desc.)</label>
				</p>
			</fieldset>
			<input type='submit' class='boton' value='Buscar'/>
		</fieldset>
	</form>
</div>
<div id="dResultados" class='borderUp'>
	<?php echo $headerPaginador ?>

    <div id="dInnerResultados">
		<animals-list></animals-list>
    </div>

    <?php echo $paginador ?>

	</div>
@stop