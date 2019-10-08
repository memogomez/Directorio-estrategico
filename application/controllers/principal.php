<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{
	public function index()
	{
		require("sesiones.php");
		validaSesion();
		$this->load->view('header');
		$data['contactos']=$this->consultas->contactos();
		$this->load->view('main', $data);
		$this->load->view('footer');
	}


	public function formAddContacto()
	{
		$contacto = array(
			'id'=>'',
			'entidad'=>'',
			'imagen'=>'',
			'cargo'=>'',
			'nombre'=>'',
			'partido'=>'',
			'experiencia'=>'',
			'inicio'=>'',
			'fin'=>''
		);
		$datos = array(
			'idform' => "formNuevoContacto",
			'textbtn' => "Agregar",
			'contacto' => $contacto
		);
		$this->load->view('_formulario', $datos);	
	}

	public function guardarContacto()
	{
		$datos = array(
			'entidad'=>$this->input->post('entidad'),
			//'imagen'=>$this->input->post('imagen'),
			'cargo'=>$this->input->post('cargo'),
			'nombre'=>$this->input->post('nombre'),
			'partido'=>$this->input->post('partido'),
			'experiencia'=>$this->input->post('experiencia'),
			'inicio'=>$this->input->post('inicio'),
			'fin'=>$this->input->post('fin'),
		);
		
		$this->guardar_archivo();
		$this->insertar->insertar('contactos',$datos);
	}


	public function formEditContacto(){
		$idcontacto = $this->input->post('idcontacto');
		$contacto = $this->consultas->consultaGral('contactos', 'id', $idcontacto, '2');

		$datos = array(
			'idform' => "formEditContacto",
			'textbtn' => "Editar",
			'contacto' => $contacto
		);
		$this->load->view('_formulario',$datos);

	}

	public function Editarcontacto(){
		$idcontacto = $this->input->post('id');
		$datos = array(
			'entidad'=>$this->input->post('entidad'),
			'imagen'=>$this->input->post('imagen'),
			'cargo'=>$this->input->post('cargo'),
			'nombre'=>$this->input->post('nombre'),
			'partido'=>$this->input->post('partido'),
			'experiencia'=>$this->input->post('experiencia'),
			'inicio'=>$this->input->post('inicio'),
			'fin'=>$this->input->post('fin'),
		);
		$this->insertar->actualizar('contactos',$datos,array('id'=> $idcontacto ));
	}

	public function eliminarcontacto(){
		$idcontacto = $this->input->post('idcontacto');
		$this->delete->eliminarId('contactos',$idcontacto);

	}

	public function formVerContacto(){
		$idcontacto = $this->input->post('idcontacto');
		$contacto = $this->consultas->consultaGral('contactos', 'id', $idcontacto, '2');

		$datos = array(
			'idform' => "formEditContacto",
			'textbtn' => "Editar",
			'contacto' => $contacto
		);

		$this->load->view('_formularioVer',$datos);
		
	}
	public function obtenerBusqueda(){
		$contactos = $this->input->post('contactos'); 
		$tipoDeUsuario=$_COOKIE["tipoUsuario"];
		$data["contactos"] = $contactos;
		$data["tipoDeUsuario"]= $tipoDeUsuario;
		$this->load->view('main', $data);
	}
	private function guardar_archivo(){
		$mi_archivo = 'upload';
        $config['upload_path'] = "uploads/";
       // $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "jpg|png";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            //$data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        var_dump($this->upload->data());
	}
	public function cerrarSes(){
		redirect(base_url().'inicio');
	}
}
?>