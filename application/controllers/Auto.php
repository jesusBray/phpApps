<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("autosModel");
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		//module butstrap
		$data['ress'] = $this->autosModel->getAll();
		$this->load->view('headers/librerias');
		$this->load->view('dashboard/autotable', $data);
	}

	public function update($id){


		//llamamos a la funcion datosModelo y le enviamos los datos de la vista en una variable resultado
		$resultado = $this->datosModel->update($id);
        $this->index();
	}

    public function create(){
		//validamos y hacemos un catch
        $this->autosModel->registro();
        $this->index();
	}

	public function form($id){

        if ($id == "new") {
            $this->load->view('dashboard/autoform');
        }
        // $data['table'] = get_form();
		//module butstrap
		$this->load->view('headers/librerias');
        // //view acount/update
		// $this->load->view('acount/update');
		// $user['ress'] = $this->datosModel->getUserById($id);
		// if ($user) {
			
		// 	$this->load->view('dashboard/autoform', $user);
		// }else{
		// 	$this->index();
		// }
	}

	public function delete($id){
		$this->datosModel->deletById($id);
		$this->index();
	}
	
	
}
