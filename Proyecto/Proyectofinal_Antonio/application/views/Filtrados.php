<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020
echo '
		<!doctype html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link href="' . base_url() . 'CSS/style.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<title>Inicio</title>
		  </head>
		  <body>
			<div class="container-fluid" >
				<div class="row">
					<div class="col-12" id="header">
						<img src="' . base_url() . 'Imagenes/prueba1.jpg" alt="Es una imagen del inicio" longdesc="Se trata de una imagen ">
					</div>
				</div>
				<div class="row">
					';
include('Barrademenu.php');
echo '
				</div>
				<div class="row " id="contenedor">
				';
echo '<div class=" col-lg-9 col-md-5 col-xs-12 p-3">
            ';
if ($this->filtradas == NULL) {
	echo "<p>No hay incidencias disponibles con ese tipo para mostrar porfavor vuelva mas tarde</p>";
} else {
	foreach ($this->filtradas as $indice ) {
		echo "<button>$indice</button>";
	}
}
echo'
        </div>';



echo '
				</div>
			
			
			
			
			';

include('Barrafooter.php');
echo '
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  </body>
		</html>
	';

?>
