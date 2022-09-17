<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		//module butstrap
		// $this->load->helper('css/login/');
		$this->load->view('headers/librerias');
		$this->load->view('login/index');
	}

	public function create (){
		$this->load->view('includes/header');
		$this->load->view('products/create');
		$this->load->view('includes/footer');
	}

	public function validate(){
		$email=$this->input->post("email");
		$password=$this->input->post("password");

		//llamamos a la funcion datosModelo y le enviamos los datos de la vista en una variable resultado
		$resultado = $this->datosModel->loginBy($email, $password);

		//validamos y hacemos un catch
		if ($resultado ) {
			redirect("acount");
		}else{
			$info["titulo"] ="Error!";
			$this->index();
		}
	}

	public function delete($id)
	{
	$this->db->where('id',$id);
	$this->db->delete('products');
	redirect(base_url('products'));
	}


}
