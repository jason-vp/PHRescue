function toggleDisable(checkbox, id_fieldset) {
    var toggle = document.getElementById(id_fieldset);
    checkbox.checked ? toggle.disabled = false : toggle.disabled = true;
}

function mostrarlugar(formulario, valor) {/*
radios=formulario.getElementsByName("sel-lugar");

for( var element in radios ){
  radios[element].className='no-display'
}
switch(valor) {
	case 1:
	
	[break;]
	case 2:
	
	[break;]
	
	case 3:
	
	[break;]
	
	case 4:
	
	[break;]
	
	default:
	
	[break;]
}*/
}


function datoslugar(radio) {
radios=radio.form.getElementsByName("sel-lugar");
}

function reseteadoforms(cuerpo) {
}