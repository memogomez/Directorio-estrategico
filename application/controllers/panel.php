<?php

class Panel extends CI_Controller
{
	public function _construct()
	{
		parent::__constructor();
		$this->very_sesion();
	}
	public function index()
	{
		$this->load->view('nivel');
	}
	function very_sesion()
	{
		if($this->session->userdata('usuario'))
		{
			redirect(base_url().'usuarios');
		}
	}
}


?>