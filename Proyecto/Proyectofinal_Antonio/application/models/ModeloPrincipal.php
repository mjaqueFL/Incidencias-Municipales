<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020

class ModeloPrincipal extends CI_Model
{
	var $bd = null;

	public function __construct()
	{

		parent::__construct();

		$this->bd=$this->load->database('default',true);
	}

	public function autenticar($usuario,$password)
	{
		$this->bd->select('codigousuario,correo,contraseña');
		$this->bd->from('usuarios');
		$this->bd->where("correo",$usuario);
		$this->bd->where("contraseña",$password);

		$resultado=$this->bd->get();

		if($resultado->num_rows()>0)
		{
			return $resultado->row();
		}
		else
		{
			return false;
		}

	}


}

?>
