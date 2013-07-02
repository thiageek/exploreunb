<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_cardapio extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function salvar_cardapio($data) {
		return $this->db->insert('tb_cardapio', $cardapio);
	}
	
	function editar_cardapio($id, $data) {
		$this->db->where('id_cardapio', $id);
		return $this->db->update('tb_cardapio', $data);
	}

}