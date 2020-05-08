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

	//Con esta funcion comprobaremos que existe el usuario o no
	public function autenticar($usuario,$password)
	{
		$this->bd->select('id_usuario,correo,password');
		$this->bd->from('Usuario');
		$this->bd->where("correo",$usuario);
		$this->bd->where("password",$password);

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

	//Cogeremos los tipos gracias a esto
	public function cogertipos()
	{
		$this->bd->select('id_tipo,nombre_tipo');
		$this->bd->from('tipo_incidencia');
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}


	 //con esta funcion veremos nuestras incidencias
	public function verincidencias()
	{
		$this->bd->select('*');
		$this->bd->from('incidencia');
//		$this->bd->join('tipo_incidencia', 'tipo_incidencia = id_tipo');
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}
	//Con esta funcion crearemos una incidencia
	public function altaincidencia($datos)
	{
		 $this->bd->insert('incidencia',$datos);

	}


	//Con esta funcion modificaremos una incidencia
	public function modificacionincidencia($datos)
	{
		$this->bd->replace('incidencia',$datos);

	}


	//Con esta funcion borraremos una incidencia
	public function borrado($idincidencia)
	{
		$this->bd->where('id_incidencia',$idincidencia);
		$this->bd->delete('incidencia');
	}


	public function cogerdatosincidencia($idincidencia)
	{
		$this->bd->select('id_incidencia,titulo,descripcion,fecha,ubicacion,tipo_incidencia');
		$query = $this->bd->get('incidencia');
		$this->bd->where('id_incidencia',$idincidencia);
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}

	public function cogertodo()
	{
		return $this->bd->get('incidencia')->result();
	}
}

?>
