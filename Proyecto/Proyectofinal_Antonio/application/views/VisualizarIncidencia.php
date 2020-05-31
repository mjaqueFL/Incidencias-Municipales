<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de Guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020
$inp_idincidencia=array(
	'name'=>'idincidencia',
	'id'=>'ins_idclase',
	'readonly' => 'readonly',
	'value'=>$this->visualizadon['id_incidencia'],
	'type' =>'hidden',
);
$inp_tituloincidencia=array(
	'name'=>'tituloincidencia',
	'id'=>'nombreclase',
	'size'=>'232',
	'readonly' => 'readonly',
	'value'=>$this->visualizadon['titulo'],
);


$inp_descripcion=array(
	'name'=>'descripcioninciencia',
	'id'=>'ins_idclase',
	'readonly' => 'readonly',
	'rows' => 4,
	'cols' => 232,
	'value'=>$this->visualizadon['descripcion'],
);
$inp_idfecha=array(
	'name'=>'fechaincidencia',
	'id'=>'ins_idclase',
	'size'=>'38',
	'readonly' => 'readonly',
	'value'=>$this->visualizadon['fecha'],
	'type' =>'hidden',
);
$inp_idubicacion=array(
	'name'=>'ubicacionincidencia',
	'id'=>'ins_idclase',
	'size'=>'38',
	'readonly' => 'readonly',
	'value'=>$this->visualizadon['ubicacion'],
	'type' =>'hidden',
);

$slc_tipoincidencia=array(
	'name'=>'tipoincidencia',
	'options'=> $this->mistipos,
	'readonly' => 'readonly',
	'selected' => $this->visualizadon["tipo_incidencia"],
	'type' => 'select',
	'type' =>'hidden',

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
				<div class="col-lg-12 col-xs-12">
				';

					/*Aqui el formulario*/
					echo '<form action="'.base_url().'altacomentario" method="post" >';
					echo form_label('titulo incidencia: ');
					echo '<br>';
					echo form_input($inp_tituloincidencia);
					echo '<br>';
					echo form_label('Descripcion incidencia: ');
					echo '<br>';
					echo form_textarea($inp_descripcion);
					echo '<br>';
					echo form_input($inp_idincidencia);
					echo form_input($inp_idfecha);
					echo form_input($inp_idubicacion);
					echo '
					<textarea rows=4 cols="232" placeholder="Agrega tu comentario aqui" name="comentario"></textarea>
					<br>
					<div id="botonanadircomentario">
										<input type="submit" value="añadir  comentario">
					</div>
					</form>';
echo '
	</div>
	<div class="col-lg-6 col-xs-12 ">
';
			if($this->session->userdata('tipousuario')=='a')
			{
				if ($this->miscomentarios == NULL) {
					echo "<p>No hay incidencias disponibles para mostrar porfavor vuelva mas tarde</p>";
				} else {
					foreach ($this->miscomentarios as $indice => $valor) {
						echo '<h4>Comentarios</h4>';
						echo "<div id='estilocomentariosadmin'>Comentario: $valor 
							
								<button data-id='$indice' class='borrarcomentario'>Borrar</button> 
						
						</div>";
					}
				}
			}
			else
			{
				if ($this->miscomentarios == NULL) {
					echo "<p>No hay incidencias disponibles para mostrar porfavor vuelva mas tarde</p>";
				} else {
					foreach ($this->miscomentarios as $indice => $valor) {
						echo "<div id='estilocomentarios' >
							Comentario: $valor 
						</div>";
					}
				}
			}
echo '</div></div>';
echo '<script src="'.base_url().'js/ajax/ajax.js"></script>';
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
