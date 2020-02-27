<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ponto_model extends CI_Model {
	function __construct(){
		$this->load->database();
	}

	function buscaPontos ($idusuario){
		$this->db->where('fk_idUsuario', $idusuario);
		return $this->db->get('ponto')->result_array();
	}

	function inserePonto ($ponto){
		$this->db->insert('ponto', $ponto);
	}
}
?>