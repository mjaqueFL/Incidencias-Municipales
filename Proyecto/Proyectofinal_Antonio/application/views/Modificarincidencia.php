<?php
// Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
$inp_tituloincidencia=array(
	'name'=>'tituloincidencia',
	'id'=>'nombreclase',
	'value'=>$this->clase['titulo'],
);

$inp_idclase=array(
	'name'=>'idincidencia',
	'id'=>'ins_idclase',
	'value'=>$this->clase['id_incidencia'],
);
$inp_descripcion=array(
	'name'=>'descripcioninciencia',
	'id'=>'ins_idclase',
	'value'=>$this->clase['descripcion'],
);
$inp_idfecha=array(
	'name'=>'fechaincidencia',
	'id'=>'ins_idclase',
	'value'=>$this->clase['fecha'],
);
$inp_idubicacion=array(
	'name'=>'ubicacionincidencia',
	'id'=>'ins_idclase',
	'value'=>$this->clase['ubicacion'],
);

$slc_tipoincidencia=array(
	'name'=>'tipoincidencia',
	'options'=> $this->mistipos,
	'selected' => $this->clase["tipo_incidencia"],
	'type' => 'select'

);
$attributes =array('class'=> 'ControladorPrincipal','id'=>'myform');

?>
<?php
 echo '
 <!doctype html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link href="'.base_url().'CSS/style.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<title>Inicio</title>
		  </head>
		  <body>
			<div class="container-fluid" >
				<div class="row">
					<div class="col-12" id="header">
						<img src="'.base_url().'Imagenes/prueba1.jpg" alt="Es una imagen del inicio" longdesc="Se trata de una imagen ">
					</div>
				</div>
				<div class="row">
					<div class="col-12" id="menu">
						<a class="nav" href="' .base_url(). 'home">Inicio</a>						
						<a class="nav" href="Estadisticas.html">Estadisticas</a>
						<a class="nav" href="Incidencias.html">Incidencias</a>
						<a class="nav" href="Historiadelapagina.html">Historia de la pagina</a>
						<a class="nav" href="haztemiembro.html">Hazte miembro</a>
						<a class="nav" href="' .base_url(). 'logearse">Login</a>
						<a class="nav" href="' .base_url(). 'cerrarsesion">Cerrar sesion</a>
					</div>
				</div>
				<div class="row" id="contenedor">
				<div class="col-12">
				<div class="col-12" id="formulariomodifi"';
				echo validation_errors();
				echo form_open(base_url().'ControladorPrincipal/modificarincidencia',$attributes);
				echo form_label('titulo incidencia: ');
				echo '<br>';
				echo form_input($inp_tituloincidencia);
				echo '<br>';
				echo form_label('descripcion incidencia: ');
				echo '<br>';
				echo form_input($inp_descripcion);
				echo '<br>';
				echo form_label('id incidencia: ');
				echo '<br>';
				echo form_input($inp_idclase);
				echo '<br>';
				echo form_label('Fecha incidencia: ');
				echo '<br>';
				echo form_input($inp_idfecha);
				echo '<br>';
				echo form_label('ubicacion incidencia: ');
				echo '<br>';
				echo form_input($inp_idubicacion);
				echo '<br>';
				echo form_label('tipo incidencia: ');
				echo '<br>';
				echo form_dropdown($slc_tipoincidencia);
				echo '<br>';echo '<br>';
				echo form_submit('btn_modificar','Modificar');
				echo form_close();echo '<br>';


echo'
</div>
</div>
				</div>
				<div class="row" id="footer">
					<div class=" col-lg-4 col-sm-12">
						   <li><a href="PoliticaPrivacidad.html">POLITICA DE PRIVACIDAD</a> </li>
					</div>
					 <div class="col-lg-4 col-sm-12">
					 <li><a href="Cookies.html">POLITICA DE COOKIES</a> </li>
					 </div>
					 <div class="col-lg-4 col-sm-12">
					   <li><a href="avisolegal.html"> AVISO LEGAL</a></li>
					 </div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  </body>
		</html>
 ';



?>


