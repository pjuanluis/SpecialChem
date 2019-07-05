<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function  __construct() {
		parent:: __construct();	
	}

	public function index() {
		$data[] = array();
		$data['vista'] = $this->load->view('home_view', '', TRUE);
		$this->load->view('main_view', $data, FALSE);
	}

	public function conocenos() {
		$data[] = array();
		$data['vista'] = $this->load->view('about_view', '', TRUE);
		$this->load->view('main_view', $data, FALSE);
	}

	public function industria() {
		$data[] = array();
		$data['vista'] = $this->load->view('services_view', '', TRUE);
		$this->load->view('main_view', $data, FALSE);
	}

	public function contacto() {
		$data[] = array();
		$data['vista'] = $this->load->view('contact_view', '', TRUE);
		$this->load->view('main_view', $data, FALSE);
	}
}
