//Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de Guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
function GetCookie(name) {
	var arg=name+"=";
	var alen=arg.length;
	var clen=document.cookie.length;
	var i=0;

	while (i<clen) {
		var j=i+alen;

		if (document.cookie.substring(i,j)==arg)
			return "1";
		i=document.cookie.indexOf(" ",i)+1;
		if (i==0)
			break;
	}

	return null;
}

function aceptar_cookies(){
	if(GetCookie("cookies_aceptada"))
	{
		document.cookie = "cookies_aceptada=aceptada; expires=" + 90;
	}
	else
	{
		if(confirm("¿Quieres aceptar el uso de cookies?")) {
			var expire = new Date();
			expire = new Date(expire.getTime() + 7776000000);
			document.cookie = "cookies_aceptada=aceptada; expires=" + expire;

			var visit = GetCookie("cookies_aceptada");

			if (visit == 1) {
				popbox3();
			}
		}
	}
}

$(function() {
	var visit=GetCookie("cookies_surestao");
	if (visit==1){ popbox3(); }
});

function popbox3() {
	$('#overbox3').toggle();
}

function aceptar() {
	var opcion = document.contactar.condiciones; //acceso al botón
	if (opcion.checked == true) { //botón seleccionado

	}
	else {  //botón no seleccionado
		alert("Debe aceptar las condiciones");
		return false; //el formulario no se envia
	}
}
