<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_local extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function salvar_local($data) {
		return $this->db->insert('tb_local', $data);
	}
	
	function editar_local($id, $data) {
		$this->db->where('id_local', $id);
		return $this->db>update('tb_local',$data);
	}

}