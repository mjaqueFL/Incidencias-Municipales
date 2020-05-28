<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de Guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020

class ModeloPrincipal extends CI_Model
{
	var $bd = null;

	public function __construct()
	{

		parent::__construct();

		$this->bd = $this->load->database('default', true);
	}
	/**
	 * Este metodo nos iniciara la sesion .
	 *
	 * Este metodo sera el encargado de que existe el usuario y la comprobacion de usuario y contraseña    .
	 *
	 */
	//Con esta funcion comprobaremos que existe el usuario o no
	public function autenticar($usuario,$contrasenia)
	{

		$this->bd->select('id_usuario,correo,password,tipo');
		$this->bd->from('usuario');
		$this->bd->where("correo", $usuario);
		$resultado = $this->bd->get();

		if ($resultado->num_rows() > 0) {
			return $resultado->row();
		} else {
			return false;
		}

	}

	/**
	 * Este metodo nos cogera los tipos de incidencias que existen .
	 *
	 * Este metodo sera el encargado de coger los tipos de incidencias que existen    .
	 *
	 */
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

	/**
	 * Este metodo nos cogera las incidencias que tienen los usuarios .
	 *
	 * Este metodo sera el encargado de coger  las incidencias que tienen los usuarios    .
	 *
	 */
	//con esta funcion veremos nuestras incidencias
	public function verincidencias()
	{
		$this->bd->select('*');
		$this->bd->from('incidencia');
		$this->bd->where('id_usuario', $this->session->userdata('codigousuario'));
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}

	/**
	 * Este metodo nos realizara el insert into de incidencia .
	 *
	 * Este metodo sera el encargado de añadir datos al abase de datos    .
	 *
	 *  string $datos esto cogera los datos que vienen del formulario
	 */
	//Con esta funcion crearemos una incidencia
	public function altaincidencia($datos)
	{
		$this->bd->insert('incidencia', $datos);

	}

	/**
	 * Este metodo nos realizara el update de incidencia .
	 *
	 * Este metodo sera el encargado de actualizar datos a la base de datos    .
	 *
	 *  string $datos esto cogera los datos que vienen del formulario
	 */

	//Con esta funcion modificaremos una incidencia
	public function modificacionincidencia($datos, $idincidencia)
	{
		$this->bd->replace('incidencia', $datos);

	}


	/**
	 * Este metodo nos realizara el delete from de incidencia .
	 *
	 * Este metodo sera el encargado de borrar datos a la base de datos    .
	 *
	 *  string $idincidencia esto cogera los datos que vienen del formulario
	 */
	//Con esta funcion borraremos una incidencia
	public function borrado($idincidencia)
	{
		$this->bd->where('titulo', $idincidencia);
		$this->bd->delete('incidencia');
	}


	/**
	 * Este metodo se usa para ver todas las incidencias .
	 *
	 *Este metodo se usa para ver todas las incidencias    .
	 *     string $idincidencia esto cogera los datos que vienen del formulario
	 *
	 */
	//para coger los datos
	public function cogerdatosincidencia($idincidencia)
	{
		$this->bd->select('id_incidencia,titulo,descripcion,fecha,ubicacion,tipo_incidencia,id_usuario');
		$this->bd->from('incidencia');
		$this->bd->where('id_incidencia=' . $idincidencia . ' and id_usuario=' . $this->session->userdata('codigousuario'));
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}


	/**
	 * Este metodo se usa para ver todas las incidencias .
	 *
	 *Este metodo se usa para ver todas las incidencias    .
	 *
	 */
	public function cogertodo($datos)
	{

		return $this->bd->get('incidencia')->result();

	}


	/**
	 * Este metodo se usa para ver todas las incidencias .
	 *
	 *Este metodo se usa para ver todas las incidencias    .
	 *
	 */
	public function vertodaslasincidencias()
	{
		$this->bd->select('*');
		$query = $this->bd->get('incidencia');
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}
	/**
	 * Este metodo sera el encargado de filtrar las incidencias .
	 *
	 * Este metodo sera el encargado de filtrar las incidencias    .
	 *
	 *  string $tipo esto cogera el tipo que tiene que buscar
	 */
	//Con e
	public function filtrado($tipo)
	{
//		echo $tipo;
		$this->bd->select('*');
		$this->bd->from('incidencia');
		$this->bd->where('tipo_incidencia', $tipo);
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}

	/**
	 * Este metodo sera el encargado de añadir comentarios .
	 *
	 * Este metodo sera el encargado de añadir comentarios a esa incidencia    .
	 *
	 *
	 */
	public function altacomentarios($datos)
	{
		$this->bd->insert('comentario', $datos);
	}

	/**
	 * Este metodo sera el encargado de ver  los comentarios .
	 *
	 * Este metodo sera el encargado de encargado de ver  los comentarios de esa inciencia    .
	 *
	 *
	 */
	public function vercomentarios($idincidencia)
	{
		$this->bd->select('*');
		$this->bd->from('comentario');
		$this->bd->where('id_incidenciacomn', $idincidencia);
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}

	public function testeo($idincidencia)
	{

		$this->bd->select('id_incidencia,titulo,descripcion,fecha,ubicacion,tipo_incidencia,id_usuario');
		$this->bd->from('incidencia');
		$this->bd->where('id_incidencia', $idincidencia);
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}

	/**
	 * Este metodo sera el encargado de borrar comentarios .
	 *
	 * Este metodo sera el encargado de encargado borrar los comentarios que el admin clicke    .
	 *
	 *
	 */
	public function borrarcomentarios($idcoment)
	{
		$this->bd->where('id_comentario', $idcoment);
		$this->bd->delete('comentario');
	}

	/**
	 * Este metodo sera el realizar la grafica  .
	 *
	 * Este metodo sera el encargado de encargado de contar los tipos que necesita la grafica para que aparezca    .
	 *
	 *
	 */
	public function cantidadtipos()
	{
		$this->bd->select('COUNT(*) as cantidad ,nombre_tipo');
		$this->bd->from('incidencia');
		$this->bd->join('tipo_incidencia', 'tipo_incidencia=id_tipo');
		$this->bd->group_by('tipo_incidencia');
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}

	/**
	 * Este metodo sera el encargado de realizar el alta de usuario .
	 *
	 * Este metodo sera el encargado de de realizar el alta de usuario cada vez que se registren	    .
	 *
	 *
	 */
	public function registrousuario($datos)
	{
		$this->bd->insert('usuario', $datos);

	}


	public function verusuarios()
	{
		$this->bd->select('*');
		$this->bd->from('usuario');
		$query = $this->bd->get();
		$rows = $query->result_array();
		$query->free_result();
		return $rows;
	}
}

?>
