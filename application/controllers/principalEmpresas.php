<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalEmpresas extends CI_Controller
{
	public function index()
	{
		require("sesiones.php");
		validaSesion();
		$this->load->view('header');
		$data['contactosprivados']=$this->consultas->contactosprivados();
		$this->load->view('mainEmpresas', $data);
		$this->load->view('footer');
	}

    public function formAddContacto()
	{
		$contacto = array(
			'id'=>'',
			'razon_social'=>'',
			'entidad'=>'',
			'municipio'=>'',
			'domicilio'=>'',
			'telefono'=>'',
			'correo'=>'',
			'giro'=>'',
		);
		$datos = array(
			'idform' => "formNuevoContacto",
			'textbtn' => "Agregar",
			'contacto' => $contacto
		);
		$this->load->view('_formularioEmpresas', $datos);	
	}
	
	public function guardarContacto()
	{	

		$datos = array(
			'razon_social'=>$this->input->post('razon_social'),
			'entidad'=>$this->input->post('entidad'),
			'municipio'=>$this->input->post('municipio'),
			'domicilio'=>$this->input->post('domicilio'),
			'telefono'=>$this->input->post('telefono'),
			'correo'=>$this->input->post('correo'),
			'giro'=>$this->input->post('giro'),
		);
		$this->insertar->insertar('contactosprivados ',$datos);
		header('Location: http://localhost/directorio/principalEmpresas');

	}

	public function formEditContacto(){
		$idcontacto = $this->input->post('idcontacto');
		$contacto = $this->consultas->consultaGral('contactosprivados', 'id', $idcontacto, '2');

		$datos = array(
			'idform' => "formEditContacto",
			'textbtn' => "Editar",
			'contacto' => $contacto
		);
		$this->load->view('_formularioEmpresas',$datos);

    }
	
	public function Editarcontacto(){
		//Aqui actualizo la info en base de datos
		$idcontacto = $this->input->post('id');
		$datos = array(
			'razon_social'=>$this->input->post('razon_social'),
			'entidad'=>$this->input->post('entidad'),
			'municipio'=>$this->input->post('municipio'),
			'domicilio'=>$this->input->post('domicilio'),
			'telefono'=>$this->input->post('telefono'),
			'correo'=>$this->input->post('correo'),
			'giro'=>$this->input->post('giro'),
		);
		$this->insertar->actualizar('contactosprivados',$datos,array('id'=> $idcontacto ));
		header('Location: http://localhost/directorio/principalEmpresas');
	}

	public function eliminarcontacto(){
		$idcontacto = $this->input->post('idcontacto');
		$this->delete->eliminarId('contactosprivados',$idcontacto);

    }
	
	public function formVerContacto(){
		$idcontacto = $this->input->post('idcontacto');
		$contacto = $this->consultas->consultaGral('contactosprivados', 'id', $idcontacto, '2');

		$datos = array(
			'idform' => "formEditContacto",
			'textbtn' => "Editar",
			'contacto' => $contacto
		);

		$this->load->view('_formularioVerEmpresas',$datos);
		
	}
	
	public function obtenerBusqueda(){
		$contactos = $this->input->post('contactosprivados'); 
		$tipoDeUsuario=$_COOKIE["tipoUsuario"];
		$data["contactosprivados"] = $contactos;
		$data["tipoDeUsuario"]= $tipoDeUsuario;
		$this->load->view('mainEmpresas', $data);
    }
	
	public function tomarDecision(){
		$idcontacto =  (int)$this->input->post('id');
		if($idcontacto > 0){
			$this->Editarcontacto();
		}else{
			$this->guardarContacto();
			
		}
		
	}
}
?>