<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));
	}

	//vista cliente del datos/index
	public function index() {
		$info["titulo"] ="Registra datos";
		$this->load->view('datos/index', $info);
	}




	//entrada de datos x cliente
	//put nombre	apellido	ci	telefono	email	password
	public function registrar(){
		$nombre=$this->input->post("nombre");
		$apellido=$this->input->post("apellido");
		$ci=$this->input->post("ci");
		$telefono=$this->input->post("telefono");
		$email=$this->input->post("email");
		$password=$this->input->post("password");

		//llamamos a la funcion datosModelo y le enviamos los datos de la vista en una variable resultado
		$resultado = $this->datosModel->registro($nombre, $apellido, $ci, $telefono, $email, $password);

		//validamos y hacemos un catch
		if ($resultado ) {
			redirect("acount");
		}else{
			$this->index();
		}
	}


}
