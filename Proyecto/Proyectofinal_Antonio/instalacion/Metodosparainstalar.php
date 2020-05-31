<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020

class instalacion
{
	private $conexion;
	private $resultado;

	function __construct($host, $user, $pasw, $basededatos)
	{
		$this->conexion = new mysqli($host, $user, $pasw, $basededatos);

	}
	function generarbd($consulta)
	{
		$this->conexion->multi_query($consulta);
	}

	function ejecutarconsulta($sql)
	{

		return $this->resultado = $this->conexion->query($sql);

	}
}
?>
