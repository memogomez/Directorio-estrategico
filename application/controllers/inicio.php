<?php
class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('usuarios_model');
	}
	public function index()
	{
		$this->load->view('directorio_estrategico');
	}

}


?>