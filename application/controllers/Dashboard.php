<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));
	}
	
	
	public function index(){		
		$this->getTemplate($this->load->view('acount/acountform', '', TRUE));

	}

	public function getTemplate($vista){
		$this->load->view('headers/librerias');
		
		$data = array(
			'header' => $this->load->view('acount/layout/header','',TRUE),
			'nav' => $this->load->view('acount/layout/nav','',TRUE),
			'aside' => $this->load->view('acount/layout/aside','',TRUE),
			'content' => $vista,
			'footer' => $this->load->view('acount/layout/footer','',TRUE)
		);
		$this->load->view('acount/mainpanel',$data);
	}

	public function usuarios(){		
		$data['ress'] = $this->datosModel->getAll();		
		$this->getTemplate($this->load->view('acount/index', $data,TRUE));
	}
	
}
