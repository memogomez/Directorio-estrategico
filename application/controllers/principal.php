<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{
	public function index()
	{
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
			'imagen'=>$this->input->post('imagen'),
			'cargo'=>$this->input->post('cargo'),
			'nombre'=>$this->input->post('nombre'),
			'partido'=>$this->input->post('partido'),
			'experiencia'=>$this->input->post('experiencia'),
			'inicio'=>$this->input->post('inicio'),
			'fin'=>$this->input->post('fin'),
		);

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
		$data["contactos"] = $contactos;
		$this->load->view('main', $data);
	}

}
?>