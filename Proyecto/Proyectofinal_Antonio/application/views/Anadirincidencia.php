<?php
//Nombre de autor:Antonio Barril Hernandez
// Curso:2 DAW
// Escuela: Escuela Virgen de guadalupe
// Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
// Año:2020
$tituloincidencia=array(
	'name'=>'tituloincidencia',
	'id'=>'tituloincidencia',
	'maxlength'=>'30',
	'size'=>'30'
);
$descripcionincidencia=array(
	'name'=>'descripcionincidencia',
	'id'=>'descripcionincidencia',
	'maxlength'=>'30',
	'size'=>'30'
);
$ubicacionincidencia=array(
	'name'=>'ubicacionincidencia',
	'id'=>'ubicacionincidencia',
	'maxlength'=>'30',
	'size'=>'30'
);
$tipos=array(
	'name'=>'tipo',
	'options'=> $this->mistipos,
	'type' => 'select'

);

$attributes =array('class'=> 'ControladorPrincipal','id'=>'myform');

?>
<?php echo validation_errors();?>
<?php echo form_open(base_url().'alta',$attributes);?>
<?php echo form_label('Titulo incidencia');?><br/>
<?php echo form_input($tituloincidencia); ?><br/><br/>
<?php echo form_label('Descripcion incidencia');?><br/>
<?php echo form_input($descripcionincidencia); ?><br/><br/>
<?php echo form_label('Escriba la ubicacion');?><br/>
<?php echo form_input($ubicacionincidencia); ?><br/><br/>
<?php echo form_label('Selecciona el tipo de incidencia');?><br/>
<?php echo form_dropdown($tipos); ?><br/><br/>
<?php echo form_submit('btn_enviar','Añadir'); ?><br/><br/>
<?php echo form_close();?>
<?php echo "<a href='".base_url()."home'><button>Menu principal</button></a>"?>
