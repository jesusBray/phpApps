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
		$resultado = $this->autosModel->update($id);
        $this->index();
	}

    public function create(){
		$placa=$this->input->post("placa");
		$tipo=$this->input->post("tipo");
		//validamos y hacemos un catch
        $resultado = $this->autosModel->registro($placa, $tipo);
		$this->index();
	}

	public function form($id){

        if ($id == "new") {
			$user['ress']="";
            $this->load->view('dashboard/autoform', $user);
        }else{
			$user['ress'] = $this->autosModel->getautoById($id);
			$this->load->view('dashboard/autoform', $user);
		}
		//module butstrap
		$this->load->view('headers/librerias');

	}

	public function delete($id){
		$this->autosModel->deletById($id);
		
		$this->index();
	}
	
	
}
