<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function index()
	{
		//module butstrap
		$this->load->view('headers/librerias');
		$this->load->view('inicio');
	}
}
