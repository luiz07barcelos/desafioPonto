<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Ponto_model');

		if (!$this->session->email) {
			redirect(base_url());
		}

		$data['pontos'] = $this->Ponto_model->buscaPontos($this->session->idusuario); 
		
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard/dashboard');
		$this->load->view('templates/footer');
	}

}
