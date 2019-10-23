<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalMunicipal extends CI_Controller
{
	public function index()
	{
		require("sesiones.php");
		validaSesion();
		$this->load->view('header');
		$data['contactosmunicipal']=$this->consultas->contactosmunicipal();
		$this->load->view('mainMunicipal', $data);
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
			'imagenpartido'=>'',
			'experiencia'=>'',
			'inicio'=>'',
			'fin'=>'',
			'resena'=>"",
		);
		$datos = array(
			'idform' => "formNuevoContacto",
			'textbtn' => "Agregar",
			'contacto' => $contacto
		);
		$this->load->view('_formularioMunicipal', $datos);	
    }
    
    public function guardarContacto()
	{	
		$this->load->helper(array('form', 'url'));
		$config['upload_path'] = './uploads/'; 
		$config['overwrite']=FALSE;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('userfile'))  {
			$infoimagen=$this->upload->data();
		}else{
			$infoimagen['file_name']= $this->upload->display_errors();
		}
		//$nombre= $_FILES["imagen"]["name"];
		$this->load->helper(array('form', 'url'));
		$config['upload_path'] = './uploads/'; 
		$config['overwrite']=FALSE;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('partidofile'))  {
			$partidoimagen=$this->upload->data();
		}else{
			$partidoimagen['file_name']= $this->upload->display_errors();
		}


		$datos = array(
			'entidad'=>$this->input->post('entidad'),
			'imagen'=>$infoimagen['file_name'],
			'cargo'=>$this->input->post('cargo'),
			'nombre'=>$this->input->post('nombre'),
			'partido'=>$this->input->post('partido'),
			'imagenpartido'=>$partidoimagen['file_name'],
			'experiencia'=>$this->input->post('experiencia'),
			'inicio'=>$this->input->post('inicio'),
			'fin'=>$this->input->post('fin'),
			'resena'=>$this->input->post('resena'),
		);
		$this->insertar->insertar('contactosmunicipal ',$datos);
		header('Location: http://localhost/directorio/principalMunicipal');

    }
    
    public function formEditContacto(){
		$idcontacto = $this->input->post('idcontacto');
		$contacto = $this->consultas->consultaGral('contactosmunicipal', 'id', $idcontacto, '2');

		$datos = array(
			'idform' => "formEditContacto",
			'textbtn' => "Editar",
			'contacto' => $contacto
		);
		$this->load->view('_formularioMunicipal',$datos);

    }
    
    public function Editarcontacto(){
		//Aqui verifico si campo imagencontacto trae información

		
		
		//Aquí subo la imagen
		$this->load->helper(array('form', 'url'));
		$config['upload_path'] = './uploads/'; 
		$config['overwrite']=FALSE;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('userfile'))  {
			$infoimagen=$this->upload->data();
			//Aquí elimino la imagen anterior
			unlink('./uploads/'.$this->input->post('imagen'));
		}else{
			$infoimagen['file_name']= $this->input->post('imagen');
		}
		
		$this->load->helper(array('form', 'url'));
		$config['upload_path'] = './uploads/'; 
		$config['overwrite']=FALSE;
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload');
		$this->upload->initialize($config);
		if ($this->upload->do_upload('partidofile'))  {
			$partidoimagen=$this->upload->data();
			//Aquí elimino la imagen anterior
			unlink('./uploads/'.$this->input->post('imagenpartido'));
		}else{
			$partidoimagen['file_name']= $this->input->post('imagenpartido');
		}
		//Aqui actualizo la info en base de datos
		$idcontacto = $this->input->post('id');
		$datos = array(
			'entidad'=>$this->input->post('entidad'),
			'imagen'=>$infoimagen['file_name'],
			'cargo'=>$this->input->post('cargo'),
			'nombre'=>$this->input->post('nombre'),
			'partido'=>$this->input->post('partido'),
			'imagenpartido'=>$partidoimagen['file_name'],
			'experiencia'=>$this->input->post('experiencia'),
			'inicio'=>$this->input->post('inicio'),
			'fin'=>$this->input->post('fin'),
			'resena'=>$this->input->post('resena'),
		);
		$this->insertar->actualizar('contactosmunicipal',$datos,array('id'=> $idcontacto ));
		header('Location: http://localhost/directorio/principalMunicipal');
    }
    
    public function eliminarcontacto(){
		$idcontacto = $this->input->post('idcontacto');
		$this->delete->eliminarId('contactosmunicipal',$idcontacto);

    }
    
    public function formVerContacto(){
		$idcontacto = $this->input->post('idcontacto');
		$contacto = $this->consultas->consultaGral('contactosmunicipal', 'id', $idcontacto, '2');

		$datos = array(
			'idform' => "formEditContacto",
			'textbtn' => "Editar",
			'contacto' => $contacto
		);

		$this->load->view('_formularioVer',$datos);
		
    }
    
    public function obtenerBusqueda(){
		$contactos = $this->input->post('contactosmunicipal'); 
		$tipoDeUsuario=$_COOKIE["tipoUsuario"];
		$data["contactosmunicipal"] = $contactos;
		$data["tipoDeUsuario"]= $tipoDeUsuario;
		$this->load->view('mainMunicipal', $data);
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