<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('dashboard/login');
		$this->load->view('templates/footer');
	}

	public function validaLogin() {
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Usuario_model');

		$this->form_validation->set_rules('email', 'Usuário', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Senha', 'required');

		if (!$this->form_validation->run()) {
			die(json_encode(array('tipo'=>'alert','campos'=>$this->form_validation->error_array())));
		}

		$senha = md5($this->input->post('password'));
		$email = $this->input->post('email');	
		$userBD = $this->Usuario_model->buscaUsuario($email);

		if (empty($userBD)) {
			die(json_encode(array('tipo'=>'alert','mensagem'=>'Usuário e senha não encontrados.')));
		} 

		if($userBD['senha'] == $senha){
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('idusuario', $userBD['idusuario']);
			die(json_encode(array('tipo'=>'success','mensagem'=>'Usuário logado com sucesso.')));
		} else {
			die(json_encode(array('tipo'=>'alert','mensagem'=>'Senha Invalida.')));
		}
	}

	public function logout() {
		$this->load->helper('url');
		$this->load->library('session');

		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	public function cadastro() {
		$this->load->helper('url');
		$this->load->view('templates/header');
		$this->load->view('dashboard/cadastro');
		$this->load->view('templates/footer');
	} 
}
