<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function cadastrar() {
		$this->load->library('form_validation');
		$this->load->model('Usuario_model');

		$this->form_validation->set_rules('email', 'Usuário', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Senha', 'required');
		$this->form_validation->set_rules('passwordConfirm', 'Confirmação de Senha', 'required');

		if (!$this->form_validation->run()) {
			die(json_encode(array('tipo'=>'alert','campos'=>$this->form_validation->error_array())));
		}
		$usuario = array(
			'email' => $this->input->post('email'),
			'senha' => md5($this->input->post('password'))
		);
		$this->Usuario_model->insereUsuario($usuario);

		echo(json_encode(array('tipo'=>'success','mensagem'=>'Cadastro realizado com sucesso.')));
	}
}
