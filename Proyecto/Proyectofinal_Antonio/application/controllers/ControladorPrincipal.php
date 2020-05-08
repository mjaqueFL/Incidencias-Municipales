<?php
//Nombre de autor:Antonio Barril Hernandez
//Curso:2 DAW
//Escuela: Escuela Virgen de guadalupe
//Proyecto fin de ciclo: Proyecto de Web de Gestión de Incidencias Municipales
//Año:2020

defined('BASEPATH') OR exit('No tienes permiso para acceder a este contenido');

class ControladorPrincipal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('ModeloPrincipal');
	}

	//Con esta clase hce que se rediriga a home por defecto

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Principal');
	}

	//Con esta clase redigira a la pestaña de login si no hay sesion y si la hay a la principal
	public function login()
	{
		$this->load->helper('url');
		if ($this->session->userdata('logeado')) {
			$this->load->view('Principal');
		} else {
			$this->load->view('Login');
		}
	}
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
			$this->load->view('Principal');
		}
	}

	//Con esta clase accederemos al menu de las incidenciu	as

	public function menuincidencias()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$incidencias=$this->ModeloPrincipal->verincidencias();
		$this->misincidencias=array();
		foreach ($incidencias as $inc)
			$this->misincidencias[$inc['id_incidencia']]=$inc["titulo"];
		$this->load->view('Incidencias');
	}


	//Para acceder al formulario de añadir incidencias

	public function formularioanadir()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		if($this->form_validation->run()== FALSE) {

			/*Aqui cogemos los tipos de incidencias*/

			$tipos=$this->ModeloPrincipal->cogertipos();
			$this->mistipos = array();
			foreach ($tipos as $tipo)
				$this->mistipos[$tipo['id_tipo']] = $tipo['nombre_tipo'];

			$this->load->view('Anadirincidencia',$this->session->userdata('codigousuario'));
		}
	}



	//Con esta funcion crearemos una incidencia
	public function altaincidencia()
	{
		$this->load->helper('url');
		$this->load->helper('form');

		if($this->form_validation->run()== FALSE)
		{
			$datos =array();
			$datos["titulo"]=$this->input->post("tituloincidencia");
			$datos["descripcion"]=$this->input->post("descripcionincidencia");
			$datos["fecha"]= date("Y-m-d h:i:sa");
			$datos["ubicacion"]=$this->input->post("ubicacionincidencia");
			$datos["tipo_incidencia"]=$this->input->post("tipo");
			$datos["id_usuario"]=$this->session->userdata('codigousuario');
			$this->ModeloPrincipal->altaincidencia($datos);
			header("Location:".base_url()."incidencias");
		}
	}

	//Para acceder al formulario que nos permitira añadir una incidencia

	public function formulariomodificar($idincidencia)
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		if($this->form_validation->run()== FALSE)
		{


			$tipos=$this->ModeloPrincipal->cogertipos();
			$this->mistipos = array();
			foreach ($tipos as $tipo)
				$this->mistipos[$tipo['id_tipo']] = $tipo['nombre_tipo'];

			/*Aqui cogemos los datos de la clase*/
			$claseaux=$this->ModeloPrincipal->cogerdatosincidencia($idincidencia);
			$this->clase=$claseaux[$idincidencia];



			$this->load->view('Modificarincidencia');
		}
	}

	//Modificaremos una incidencia que ya existe

	public function modificarincidencia(){

		$this->load->helper('url');
		$this->load->helper('form');

		$datos =array();
		$datos["id_incidencia"]=$this->input->post("idincidencia");
		$datos["titulo"]=$this->input->post("tituloincidencia");
		$datos["descripcion"]=$this->input->post("descripcioninciencia");
		$datos["fecha"]=$this->input->post("fechaincidencia");
		$datos["ubicacion"]=$this->input->post("ubicacionincidencia");
		$datos["tipo_incidencia"]=$this->input->post("tipoincidencia");
		$datos["id_usuario"]=$this->session->userdata('codigousuario');
		$this->ModeloPrincipal->modificacionincidencia($datos);
		$this->load->view('Principal');




	}

	//para ir al formulario de borrarincidencias

	public function formularioborrar()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$data['listaincidencias']=$this->ModeloPrincipal->cogertodo();
//			$incidencias=$this->ModeloPrincipal->verincidencias();
//		$this->misincidencias=array();
//		foreach ($incidencias as $inc)
//			$this->misincidencias[$inc['id_incidencia']]=$inc["titulo"];
		$this->load->view('BorrarIncidencias',$data);

	}

	//Borraremos incidencias
	public function borrarincidencia(){
		$this->load->helper('url');
		$this->load->helper('form');
		foreach ($this->input->post('id_incidencia') as $id)
		{
			$this->ModeloPrincipal->borrado($id);
		}
		$this->load->view('Principal');
	}

//con esta clase realizaremos el cerrar sesion
	public function cerrarsesion()
	{
		$this->session->sess_destroy();
		$this->load->view('Principal');
	}



}
