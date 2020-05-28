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
			<title>Historia</title>
		  </head>
		  <body>
			<div class="container-fluid" >
				<div class="row">
					<div class="col-12" id="header">
						<img src="' . base_url() . 'Imagenes/prueba1.jpg"  class="img-fluid" alt="Es una imagen del inicio" longdesc="Se trata de una imagen ">
					</div>
				</div>
				<div class="row">
					';
include('barrademenu.php');
echo '
				</div>
				<div class="row " id="contenedor">
				
				<div>
					<p>
						 Esta pagina nacio de las necesidades que vi a la hora de sacarme el carnet de conducir debido a los tremendos socabones que existen alrededor de todo el pueblo, algunas señales pintadas,
						 otras caidas y muchas de ellas que harian faltas no la tienen, dicho esto se me ocurrio hacer mi proyecto de grado superior para intentar de una forma mas simple las necesidades
						 de estas.Si todo va bien a la hora de presentar el proyecto podria fomentarse la forma de expandirlo
					 </p>
				 </div>
				<div>
					<p>
						El desarollador de esta aplicacion se llama: Antonio Barril Hernandez programador y estudiante de 2DAW en la escuela virgen de guadalupe un alumno que desea aprender
						y investigar tecnologias, aplicado y trabajador, gracias a su esfuerzo llego al final cuando el no pensaba que llegaria. 
					</p>		
				</div>
				<div></div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				';

				echo '</div>';
include('barrafooter.php');
echo '
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  </body>
		</html>
	';
?>
