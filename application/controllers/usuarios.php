<?php

class Usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('usuarios_model');
	}
	public function index()
	{
		$this->load->view('usuarios_view');
	}
	public function registro()
	{
		$this->load->view('registro_view');
	}
	public function registro_very()
	{
		if($this->input->post('submit_reg'))
		{
			$this->form_validation->set_rules('user', 'Usuario', 'required|trim|callback_very_user');
			$this->form_validation->set_rules('pass', 'Contraseña', 'required|trim');
			$this->form_validation->set_rules('pass2', 'Confirme Contraseña', 'required|trim|matches[pass]');
			$this->form_validation->set_rules('correo', 'Correo', 'required|trim|valid_email|callback_very_correo');

			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_message('valid_email', 'El %s No es valido');
			$this->form_validation->set_message('very_user', 'El %s ya existe');
			$this->form_validation->set_message('matches', 'El campo %s no coincide con el campo %s');
			$this->form_validation->set_message('very_correo', 'El campo %s Ya existe');

			if($this->form_validation->run() != FALSE)
			{
				$this->usuarios_model->add_user();
				$data = array('mensaje'=>'El usuario se registró correctamente');
				$this->load->view('registro_view', $data);
			}
			else
			{
				$this->load->view('registro_view');
			}
		}
		else
		{
			redirect(base_url().'usuarios/registro');
		}
	}
	public function very_user($user)
	{
		$variable = $this->usuarios_model->very($user,'usuario');
		if($variable == true)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	public function very_correo($correo)
	{
		$variable = $this->usuarios_model->very($correo,'correo');
		if($variable == true)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	public function very_sesion()
	{
		if($this->input->post('submit'))
		{
			$variable = $this->usuarios_model->very_sesion();
			if($variable != -1)
			{
				$variables = array(
					'usuario' => $this->input->post('user')
				);
				$this->session->set_userdata($variables);
				setcookie("EstaLogeado", "1", time()+60*60*24, '/');
				setcookie("tipoUsuario", $variable, time()+60*60*24, '/');
				redirect(base_url().'panel');
			}
			else
			{
				$data = array('mensaje' => 'El usuario / contraseña son incorrectos');
				$this->load->view('usuarios_view',$data);
			}
		}
		else
		{
			redirect(base_url().'usuarios');
		}
	}
}


?>