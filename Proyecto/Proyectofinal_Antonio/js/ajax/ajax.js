window.onload = iniciar;

function iniciar() {
	var btns = document.getElementsByClassName("borrarcomentario");
	for (var i = 0; i < btns.length; i++) {
		btns.item(i).onclick = borrar;
	}
}

function borrar(evento) {

	var id = evento.target.getAttribute('data-id');
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		console.log(this.readyState);
		console.log(this.status);
		if (this.readyState == 4 && this.status == 200) {
			if (this.responseText == 'okay') {
				evento.target.parentElement.style.display = 'none';
			}
		}
	};
	xhttp.open('POST', '/Proyectofinal_Antonio/ControladorPrincipal/borracomentario');
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id_comentario=" + id);
}

