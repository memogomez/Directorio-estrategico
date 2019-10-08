<?php

class Usuarios_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function very($variable, $campo)
	{
		$consulta = $this->db->get_where('usuarios',array($campo=>$variable));
		if($consulta->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function add_user()
	{
		$this->db->insert('usuarios', array(
			'tipo'=>$this->input->post('tipo',TRUE),
			'usuario'=>$this->input->post('user',TRUE),
			'pass'=>$this->input->post('pass',TRUE),
			'correo'=>$this->input->post('correo',TRUE),
		));
	}
	public function very_sesion()
	{
		$consulta = $this->db->get_where('usuarios',array(
			'usuario'=>$this->input->post('user', TRUE),
			'pass' => $this->input->post('pass', TRUE)
		));
		if($consulta->num_rows() == 1)
		{
			$datosDeUsuario=$consulta->row();
			return $datosDeUsuario->tipo;
			//return $consulta[0]["tipo"];
		}
		else
		{
			return -1;
		}
	}
}




?>