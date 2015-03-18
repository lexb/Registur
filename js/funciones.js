function Validar_Contenido(valor, contenido, campo) {
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert("Debe introducir un valor para el campo " + campo + ".");
		return false;
	}
	else {
		if( !(contenido.test(valor)) ) {
			alert("El valor contenido en el campo " + campo + " no es válido.");
			return false;
		}
		else {
			return true;
		}
	}
}

function Validar_Longitud(valor, minima, maxima, campo) {
	if (minima == maxima) {
		if( valor.length < maxima ) {
			alert("La longitud del campo " + campo + " debe ser de " + maxima + " caracteres.");
			return false;
		}
		else {
			return true;
		}
	}
	else {
		if( valor.length < minima || valor.length > maxima ) {
			alert("La longitud del campo " + campo + " debe ser de " + minima + " a " + maxima + " caracteres.");
			return false;
		}
		else {
			return true;
		}
	}
}

function Validar_Seleccion(valor, campo) {
	if( valor == null || valor == 0 ) {
		alert("Debe seleccionar un valor para el campo " + campo + ".");
		return false;
	}
	else {
		return true;
	}
}