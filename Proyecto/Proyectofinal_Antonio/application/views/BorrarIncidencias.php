<?php

$attributes =array('class'=> 'ControladorPrincipal','id'=>'myform');

 echo validation_errors();
 echo form_open(base_url().'borrado',$attributes);
 echo '<input type="submit" value="borrar" />
	<br>
	<table cellpadding="2" cellspacing="2" border="1">
	<tr>
		<th><input type="checkbox" id="checkboxxx" </th>
		<th>titulo</th>
		<th>descripcion</th>
	</tr>
	';
	foreach ($listaincidencias as $lista)
	{
		echo '
<tr>
		<td><input type="checkbox" value="'.$lista->id_incidencia.'" name="id_incidencia[]"></td>
		<td>'. $lista->titulo.'</td>
		<td>'. $lista->descripcion.'</td>
		
		</tr>';
	}
 echo'

</table>
';
 echo form_close();
?>
