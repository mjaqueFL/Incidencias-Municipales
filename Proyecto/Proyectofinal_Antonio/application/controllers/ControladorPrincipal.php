<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de Guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020

defined('BASEPATH') OR exit('No tienes permiso para acceder a este contenido');

class ControladorPrincipal extends CI_Controller
{
	/**
	 * Este es un resumen corto de la clase.
	 *
	 * Esta sera la clase que hara todas las operaciones.
	 *
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('ModeloPrincipal');
	}


	//Con esta clase hce que se rediriga a home por defecto

	/**
	 * Este metodo redirige a home.
	 *
	 * Esta sera la clase que nos mandara al inicio de la aplicacion.
	 *
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');

		//Para coger los tipos de las incidencias
		$tipos = $this->ModeloPrincipal->cogertipos();
		$this->mistipos = array();
		foreach ($tipos as $tipo)
			$this->mistipos[$tipo['id_tipo']] = $tipo['nombre_tipo'];

		//Para coger todas las incidencias
		$todasincidencias = $this->ModeloPrincipal->vertodaslasincidencias();
		$this->todasinci = array();
		foreach ($todasincidencias as $todes)
			$this->todasinci[$todes['id_incidencia']] = $todes["titulo"];

		$this->load->view('Principal');
	}

	/**
	 * Este metodo nos lleva a al login.
	 *
	 * Este metodo sera el encargado de llevarnos a la pagina de login y de comprobar que estamos logeados.
	 *
	 */
	//Con esta clase redigira a la pestaña de login si no hay sesion y si la hay a la principal
	public function login()
	{
		$this->load->helper('url');
		if ($this->session->userdata('logeado')) {
			return $this->index();
		} else {
			$this->load->view('Login');
		}
	}

	/**
	 * Este metodo nos hace la funcion de login.
	 *
	 * Este metodo sera el encargado de logearnos y comprobar que no fallamos a al hora de autenticarnos.
	 *
	 */
	//Con esta clase realizara la autenticacion de usuarios
	public function logearse()
	{
		//con esto cogemos el correo y la contraseña

		$usuario = $this->input->post("correo");
		$password = $this->input->post("contrasenia");

		//comprobamos que es correcto

		$res = $this->ModeloPrincipal->autenticar($usuario, $password);
		if (!$res) {
			$this->load->view('errror');
		} else {
			//Con esto creamos la variable de sesion
			$sesion = array(
				'codigousuario' => $res->id_usuario,
				'logeado' => TRUE
			);
//			//Aqui le decimos que asi se llamara
//
			$this->session->set_userdata($sesion);
			return $this->index();
		}
	}


	/**
	 * Este metodo nos redirige ala pagina donde estan las incidencias.
	 *
	 * Este metodo sera el encargado de mostrarnos las incidencias de ese usuario.
	 *
	 */
	//Con esta clase accederemos al menu de las incidencias
	public function menuincidencias()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$incidencias = $this->ModeloPrincipal->verincidencias();
		$this->misincidencias = array();
		foreach ($incidencias as $inc)
			$this->misincidencias[$inc['id_incidencia']] = $inc["titulo"];
		$this->load->view('Incidencias');
	}


	//Para acceder al formulario de añadir incidencias

	/**
	 * Este metodo nos redirige ala pagina donde podremos dar de alta una incidencia.
	 *
	 * Este metodo sera el encargado de mostrarnos la pagina donde podremos dar de alta una incidencia.
	 *
	 */
	public function formularioanadir()
	{
		$this->load->helper('url');
		$this->load->helper('form');


		if (!isset($this->session)) {
			return $this->index();
		} else {
			if (isset($_SESSION['logeado'])) {
				if ($_SESSION['logeado'] == 1) {
					if ($this->form_validation->run() == FALSE) {

						/*Aqui cogemos los tipos de incidencias*/

						$tipos = $this->ModeloPrincipal->cogertipos();
						$this->mistipos = array();
						foreach ($tipos as $tipo)
							$this->mistipos[$tipo['id_tipo']] = $tipo['nombre_tipo'];

						$this->load->view('Anadirincidencia', $this->session->userdata('codigousuario'));
					}

				} else {
					return $this->index();
				}
			} else {
				return $this->index();
			}

		}
	}

	/**
	 * Este metodo nos realiza el alta en la base de datos.
	 *
	 * Este metodo sera el encargado de mostrarnos la pagina donde podremos dar de alta una incidencia.
	 *
	 */
	//Con esta funcion crearemos una incidencia
	public function altaincidencia()
	{
		$this->load->helper('url');
		$this->load->helper('form');


			$titulo=$this->input->post("tituloincidencia");
			$descripcion= $this->input->post("descripcioninciencia");;
			$fecha=date("Y-m-d h:i:sa");;
			$ubicacion=$this->input->post("ubicacionincidencia");;
			$tipoinci=$this->input->post("tipo");
			$idusu= $this->session->userdata('codigousuario');


		if ($this->form_validation->run() == FALSE) {
			$datos = array();
			$datos["titulo"] = $titulo;
			$datos["descripcion"] = $descripcion;
			$datos["fecha"] =$fecha;
			$datos["ubicacion"] =$ubicacion;
			$datos["tipo_incidencia"] = $tipoinci;
			$datos["id_usuario"] =$idusu;
//			print_r($datos);
			$this->ModeloPrincipal->altaincidencia($datos);
			header("Location:" . base_url() . "incidencias");
		}
		else
		{
			echo 'Debe rellenar todos los datos';
		}
	}

	/**
	 * Este metodo nos lleva a la pagina de modificacion de incidencias.
	 *
	 * Este metodo sera el encargado de mostrarnos la pagina donde podremos modificar una incidencia.
	 *
	 */

	//Para acceder al formulario que nos permitira añadir una incidencia

	public function formulariomodificar($idincidencia)
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');


		if (!isset($this->session)) {
			return $this->index();
		} else {
			if (isset($_SESSION['logeado'])) {
				if ($_SESSION['logeado'] == 1) {

					if ($this->form_validation->run() == FALSE) {
						$tipos = $this->ModeloPrincipal->cogertipos();
						$this->mistipos = array();
						foreach ($tipos as $tipo)
							$this->mistipos[$tipo['id_tipo']] = $tipo['nombre_tipo'];

						/*Aqui cogemos los datos de la clase*/
						$claseaux = $this->ModeloPrincipal->cogerdatosincidencia($idincidencia);
						$this->clase = $claseaux[$idincidencia];


						$this->load->view('Modificarincidencia');
					}
				} else {
					return $this->index();
				}
			} else {
				return $this->index();
			}
		}

	}

	//Modificaremos una incidencia que ya existe

	/**
	 * Este metodo nos realizara la modificacion de incidencias.
	 *
	 * Este metodo sera el encargado de realizar la  modificacion de una incidencia.
	 *
	 */
	public function modificarincidencia()
	{

		$this->load->helper('url');
		$this->load->helper('form');

		$datos = array();
		$datos["id_incidencia"] = $this->input->post("idincidencia");
		$datos["titulo"] = $this->input->post("tituloincidencia");
		$datos["descripcion"] = $this->input->post("descripcioninciencia");
		$datos["fecha"] = $this->input->post("fechaincidencia");
		$datos["ubicacion"] = $this->input->post("ubicacionincidencia");
		$datos["tipo_incidencia"] = $this->input->post("tipoincidencia");
		$datos["id_usuario"] = $this->session->userdata('codigousuario');
		$this->ModeloPrincipal->modificacionincidencia($datos);
		return $this->index();
	}

	/**
	 * Este metodo nos lleva a la pagina de borrado de incidencias.
	 *
	 * Este metodo sera el encargado de mostrarnos la pagina donde podremos borrar una o muchas incidencia.
	 *
	 */
	//para ir al formulario de borrarincidencias

	public function formularioborrar()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		if(!isset($this->session))
		{
			return $this->index();
		}
		else
		{
			if(isset($_SESSION['logeado']))
			{
				if($_SESSION['logeado']==1)
				{
					$incidencias = $this->ModeloPrincipal->verincidencias();

					$this->misincidencias = array();
					foreach ($incidencias as $inc)
						$this->misincidencias[$inc['id_incidencia']] = $inc["titulo"];
					$this->load->view('borrarincidencias');
				}
			}
			else
			{
				return $this->index();
			}
		}


	}
	/**
	 * Este metodo nos realizara el borrado de incidencias.
	 *
	 * Este metodo sera el encargado de realizar la  borrado de una o muchas incidencia.
	 *
	 */
	//Borraremos incidencias
	public function borrarincidencia()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		foreach ($this->input->post('id_incidencia') as $id) {
			$this->ModeloPrincipal->borrado($id);
		}
		return $this->index();
	}

	/**
	 * Este metodo nos realizara el filtro de incidencias.
	 *
	 * Este metodo sera el encargado de realizar la filtracion por tipo de  incidencia.
	 *
	 */
	public function filtro()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$idincidencia = $this->input->post("tipo");

		//con esto podremos filtrar por tipo de incidencia y nos saldran solo las incicendias de esa categoria

		$todasincidencias = $this->ModeloPrincipal->filtrado($idincidencia);
		$this->filtradas = array();
		foreach ($todasincidencias as $todes)
			$this->filtradas[$todes['id_incidencia']] = $todes["titulo"];


		$this->load->view('Filtrados');
	}

	/**
	 * Este metodo nos cerrara la sesion .
	 *
	 * Este metodo sera el encargado de cerrar sesion que tenemos abierta.
	 *
	 */
//con esta clase realizaremos el cerrar sesion
	public function cerrarsesion()
	{
		$this->session->sess_destroy();
		return $this->index();
	}
	/**
	 * Este metodo nos mostrara los datos de la incidencia y podremos añadir comentarios en ella .
	 *
	 * Este metodo sera el encargado de mostrarnos los datos de la incidencia como el titulo y descripcion  y poder añadir comentarios en ella.
	 *
	 */
	//con esta clase podremos ver los datos y añadir comentarios
	

}
