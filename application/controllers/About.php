<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		//module butstrap
		$this->load->view('headers/librerias');
		$this->load->view('about');
	}
	
}
