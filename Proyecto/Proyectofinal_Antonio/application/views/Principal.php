<?php
//Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de Guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
$tipos = array(
	'name' => 'tipo',
	'options' => $this->mistipos,
	'type' => 'select'

);


echo '
		<!doctype html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link href="' . base_url() . 'CSS/style.css" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200&family=Manuale&family=Podkova&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
			<meta name="author" content="Antonio Barril Hernandez">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<title>Inicio</title>
		  </head>
		  <body onload="aceptar_cookies()">
			<div class="container-fluid" >
				<div class="row">
					<div class="col-12" id="header">
						<img src="' . base_url() . 'imagenes/prueba1.jpg"  class="img-fluid" alt="Es una imagen del inicio" longdesc="Se trata de una imagen ">
					</div>
				</div>
				<div class="row">
					';
include('barrademenu.php');
echo '
				</div>
				<div class="row " id="contenedor">
				';
echo '<div class="col-lg-3 col-md-6 col-xs-6 p-3" id="filtros">
            <h5>Filtrar por tipo de incidencia:</h5><br/>   ';
$attributes = array('class' => 'ControladorPrincipal', 'id' => 'myform');
echo form_open(base_url() . 'ControladorPrincipal/filtro', $attributes);
echo form_dropdown($tipos);
echo '<br>';
echo '<br>';
echo form_submit('btn_enviar', 'Filtrar');
echo form_close();
echo '
            </div>';
echo '<div class=" col-lg-9 col-md-6 col-xs-6 p-3" id="incidenciaslista">
            ';
if ($this->todasinci == NULL) {
	echo "<p>No hay incidencias disponibles para mostrar porfavor vuelva mas tarde</p>";
} else {
	foreach ($this->todasinci as $indice => $valor) {
		echo "<div id='enlacesaincidencia' ><a href=" . base_url() . "verincidencia/" .  $indice . " style='color: #f2a365'>Titulo incidencia: $valor</a></div>";
	}
}
echo '
        </div>';
echo '
				</div>		
			';
include('barrafooter.php');
echo '
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			<script src="'.base_url().'js/cookie.js"></script>
		  </body>
		</html>
	';
?>
