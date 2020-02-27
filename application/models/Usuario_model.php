<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function buscaUsuario ($email){
		$this->db->where('email', $email);
		return $this->db->get('usuario')->row_array();
	}

	function insereUsuario ($usuario){
		$this->db->insert('usuario', $usuario);
	}
}
?>