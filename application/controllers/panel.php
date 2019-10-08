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
		require("sesiones.php");
		validaSesion();
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