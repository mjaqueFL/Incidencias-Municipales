<?php
//Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de Guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
echo '<script src="'.base_url().'js/funciones.js"></script>';
if(isset($_SESSION['logeado']))
{
	echo '
		<div class="col-12" id="menu">
			<a class="nav" href="' .base_url(). 'home">Inicio</a>						
			<a class="nav" href="Estadisticas.html">Estadísticas</a>
			<a class="nav" href="' .base_url(). 'incidencias">Incidencias</a>
			<a class="nav" href="Historiadelapagina.html">Historia de la página</a>
			<a class="nav" href="haztemiembro.html">Hazte miembro</a>
			<a class="nav" href="' .base_url(). 'cerrarsesion" onclick="recargar()">Cerrar sesión</a>
		</div>';
}
else
{
	echo '
		<div class="col-12" id="menu">
			<a class="nav" href="' .base_url(). 'home">Inicio</a>						
			<a class="nav" href="Estadisticas.html">Estadísticas</a>
			<a class="nav" href="' .base_url(). 'incidencias">Incidencias</a>
			<a class="nav" href="Historiadelapagina.html">Historia de la página</a>
			<a class="nav" href="haztemiembro.html">Hazte miembro</a>
			<a class="nav" href="' .base_url(). 'logearse">Login</a>
		</div>
	';
}


?>
