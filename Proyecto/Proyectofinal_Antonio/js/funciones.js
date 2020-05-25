//Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de Guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
correoverifi=0;
contraseñaverifi=0;

function validarcorreo() {
	var correo;

	correo=document.getElementById('correo').value;


	var expresionregularcorreoelectronico=new RegExp(/^[^@]+@[^@]+\.[A-Za-z]{2,}$/);
	if(expresionregularcorreoelectronico.test(correo))
	{

		correoverifi=1;

	}
	else
	{
		correoverifi=0;
	}
}
function validarcontrasenia() {

	contrasenia1=document.getElementById('contrasenia1').value;
	contrasenia2=document.getElementById('contrasenia2').value;
	if(contrasenia1==contrasenia2)
	{

		contraseñaverifi=1;
	}
	else
	{
		contraseñaverifi=0;
	}

		if(contraseñaverifi==1 && correoverifi==1)
		{
			document.getElementById("boton").removeAttribute("disabled");
		}


}

