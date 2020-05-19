<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de Guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020
$i = 0;
$inp_tituloincidencia=array(
	'name'=>'tituloincidencia',
	'id'=>'nombreclase',
	'size'=>'38',
	'readonly' => 'readonly',
	'value'=>$this->incidenciasss['titulo'],
);

$inp_idincidencia=array(
	'name'=>'idincidencia',
	'id'=>'ins_idclase',
	'readonly' => 'readonly',
	'value'=>$this->incidenciasss['id_incidencia'],
	'type'=>'hidden',
);
$inp_descripcion=array(
	'name'=>'descripcioninciencia',
	'id'=>'ins_idclase',
	'readonly' => 'readonly',
	'value'=>$this->incidenciasss['descripcion'],
);
$inp_idfecha=array(
	'name'=>'fechaincidencia',
	'id'=>'ins_idclase',
	'size'=>'38',
	'readonly' => 'readonly',
	'value'=>$this->incidenciasss['fecha'],
);
$inp_idubicacion=array(
	'name'=>'ubicacionincidencia',
	'id'=>'ins_idclase',
	'size'=>'38',
	'readonly' => 'readonly',
	'value'=>$this->incidenciasss['ubicacion'],
);

$slc_tipoincidencia=array(
	'name'=>'tipoincidencia',
	'options'=> $this->mistipos,
	'readonly' => 'readonly',
	'selected' => $this->incidenciasss["tipo_incidencia"],
	'type' => 'select'

);
echo '<form action="'.base_url().'altacomentario" method="post">';
echo form_label('titulo incidencia: ');
echo '<br>';
echo form_input($inp_tituloincidencia);
echo '<br>';
echo form_label('Descripcion incidencia: ');
echo '<br>';
echo form_textarea($inp_descripcion);
echo '<br>';
echo form_label('Fecha incidencia: ');
echo '<br>';
echo form_input($inp_idincidencia);
echo form_input($inp_idfecha);
echo '<br>';
echo form_label('Ubicación incidencia: ');
echo '<br>';
echo form_input($inp_idubicacion);
echo '<br>';
echo '<br>';echo '<br>';
echo '
<textarea rows=4 cols="40" placeholder="Agrega tu comentario aqui" name="comentario"></textarea>
<br>
<input type="submit" value="añadir  comentario">
</form>';

//print_r($this->miscomentarios);
if ($this->miscomentarios == NULL) {
	echo "<p>No hay incidencias disponibles para mostrar porfavor vuelva mas tarde</p>";
} else {
	foreach ($this->miscomentarios as $indice => $valor) {

		echo "<div >Comentario: $valor</div>";
	}
}
?>
