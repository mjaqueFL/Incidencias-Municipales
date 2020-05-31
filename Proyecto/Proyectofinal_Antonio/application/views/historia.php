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
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
			<link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200&family=Manuale&family=Podkova&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<title>Historia</title>
		  </head>
		  <body>
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
					<div class="col-12" id="parrafo1historia">
						<p>
							 Esta página nació de las necesidades que vi a la hora de sacarme el carnet de conducir debido a los tremendos socavones que existen alrededor de todo el pueblo, 
							 algunas señales pintadas,otras caídas y muchas de ellas que harían faltas no la tienen, dicho esto se me ocurrió hacer mi proyecto de grado superior para intentar 
							 de una forma más simple las necesidades de estas.Si todo va bien a la hora de presentar el proyecto podría fomentarse la forma de expandirlo para que engloba a más 
							 comunidades, ahora mismo está pensada para montijo pero a la larga podría englobar mas y mas. Seguramente a la hora de preparar esto a mas comunidades se deberia ampliar
							 la base de datos mucho mas, añadir mas herramientas para que sea mas dinamica y a la hora de explicarselo a la gente mucho mejor. Puede que existan ya otras herramientas
							 pero crear una aplicacion asi desde 0 con herramientas que no se sabe usar es todo un logro y para ello esta este proyecto.
	
						</p>
					</div>
					<div class="col-12 col-md-6" id="parrafo2">
						<p>
							El desarollador de esta aplicacion se llama: Antonio Barril Hernandez programador y estudiante de 2DAW en la escuela virgen de guadalupe un alumno que desea aprender
							y investigar tecnologias, aplicado y trabajador, gracias a su esfuerzo llego al final cuando el no pensaba que llegaria. Realizando el curso de Desarrollo de Aplicaciones
							Web en 2 años, donde todos pensaban que de primero no pasaria ni el mismo fue cambiando y ahora le gusta programar, le gusta informarse de nuevas tecnologias, sabe mas de 
							software y tiene ganas de aprender, dada la inteligencia suya al principio todo era cuesta arriba pero ahora sabe que aunque sea todo cuesta arriba esta se acaba y empieza 
							la bajada.
						</p>		
					</div>
					<div class="col-12 col-md-6">
						<div class="row" id="fotoprota">
							<img src="' . base_url() . 'imagenes/antonio.jpg"  class="img-fluid" alt="Es el creador de la pagina" longdesc="Se trata de una imagen del creador de la pagina ">
						</div>
					</div>
				</div>
				';
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
