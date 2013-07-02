<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_lanchonete extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function salvar_lanchonete($data) {
		return $this->db->insert('tb_lanchonete', $data);
	}
	
	function editar_lanchonete($id, $data) {
		$this->db->where('id_lanchonete', $id);
		return $this->db>update('tb_lanchonete',$data);
	}

}