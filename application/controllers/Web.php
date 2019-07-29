<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function  __construct() {
		parent:: __construct();	
	}

	public function index() {
		$data[] = array();
		$data['vista'] = $this->load->view('home_view', '', TRUE);
		$data['titulo'] = 'Inicio';
		$this->load->view('main_view', $data, FALSE);
	}

	public function conocenos() {
		$data[] = array();
		$data['vista'] = $this->load->view('about_view', '', TRUE);
		$data['titulo'] = 'Nosotros';
		$this->load->view('main_view', $data, FALSE);
	}

	public function industria() {
		$data[] = array();
		$data['vista'] = $this->load->view('industry_view', '', TRUE);
		$data['titulo'] = 'Industria';
		$this->load->view('main_view', $data, FALSE);
	}

	public function contacto() {
		$data[] = array();
		$data['vista'] = $this->load->view('contact_view', '', TRUE);
		$data['titulo'] = 'Contacto';
		$this->load->view('main_view', $data, FALSE);
	}

	public function mail(){
		$para = "contacto@specialchem.com.mx";
		$nombre = $this->input->post("nombre");
		$email = $this->input->post("email");
		$numero = $this->input->post("tel");
		$mensaje = $this->input->post("mensaje");
		$cuerpo = "Enviado por: ".$nombre."\n"."Numero :".$numero."\n"."Email: ".$email."\n"."Mensaje: "."\n".$mensaje;
		if ( empty($nombre) && empty($email) && empty($numero) && empty($mensaje) ) {
			redirect("Web/contacto");
		} else {
			mail($para, "Correo recibido desde EspecialChem.com.mx", $cuerpo, "");
			$this->alertaMail = '<script language="javascript">swal.fire("Mensaje Enviado!", "Nos pondremos en contacto con usted lo antes posible!", "success"); </script>';			
			$this->contacto();
			
		}
	}
}
