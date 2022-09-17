<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('getform','form', 'url'));
	}


	public function index()
	{

        // $data['table'] = get_form();
		//module butstrap
		$this->load->view('headers/librerias');
        //view acount/update
		$this->load->view('acount/update');
	}
	
}

