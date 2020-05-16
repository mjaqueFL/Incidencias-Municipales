<?php
//Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de Guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
$inp_descripcion=array(
	'name'=>'descripcioninciencia',
	'id'=>'ins_idclase',
);

$tipos = array(
	'name' => 'tipo',
	'options' => $this->mistipos,
	'type' => 'select'

);

$attributes = array('class' => 'ControladorPrincipal', 'id' => 'myform');

?>
<?php
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
include('barrademenu.php');
echo '
				</div>
				<div class="row" id="contenedor">
				<div class="col-12">
				<div class="col-12" id="formulariomodifi">
				
				<form action="' . base_url() . 'alta" method="post">
				<label>Titulo</label><br/>
				<input type="text" placeholder="Titulo incidencia" name="tituloincidencia" required><br/> 
				<label>Descripcion</label><br/>';
				echo form_textarea($inp_descripcion);
				echo '<br>';
				echo '
				<label>Ubicacion</label><br/>
				<input type="text" placeholder="Ubicacion incidencia" name="ubicacionincidencia" required ><br/>
				
';
echo '<br>';
echo form_label('Selecciona el tipo de incidencia');
echo '<br>';
echo form_dropdown($tipos);
echo '<br>';
echo '<br>';
echo form_submit('btn_enviar', 'Añadir');
echo form_close();
echo '
</form>
';
echo '<br>';
echo '
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





