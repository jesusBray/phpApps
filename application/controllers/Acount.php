<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acount extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		//module butstrap
		$data['ress'] = $this->datosModel->getAll();
		$this->load->view('headers/librerias');
		$this->load->view('acount/index', $data);
	}

	public function update($id){


		//llamamos a la funcion datosModelo y le enviamos los datos de la vista en una variable resultado
		$resultado= $this->datosModel->update($id);

		//validamos y hacemos un catch
		if ($resultado ) {
			redirect("acount");
		}else{
			$this->index();
		}
	}

	public function edit($id){
        // $data['table'] = get_form();
		//module butstrap
		$this->load->view('headers/librerias');
        // //view acount/update
		// $this->load->view('acount/update');
		$user['ress'] = $this->datosModel->getUserById($id);
		if ($user) {
			
			$this->load->view('acount/update', $user);
		}else{
			redirect("acount");
		}
	}

	public function delete($id){
		$this->datosModel->deletById($id);
		$this->index();
	}

	public function registrar(){
		$nombre=$this->input->post("nombre");
		$apellido=$this->input->post("apellido");
		$ci=$this->input->post("ci");
		$telefono=$this->input->post("telefono");
		$email=$this->input->post("email");
		$password=$this->input->post("password");

		//llamamos a la funcion datosModelo y le enviamos los datos de la vista en una variable resultado
		$this->datosModel->registro($nombre, $apellido, $ci, $telefono, $email, $password);
		$this->index();
	}

	public function getform(){
		$this->load->view('headers/librerias');
		$this->load->view('acount/acountform');
	}
}
