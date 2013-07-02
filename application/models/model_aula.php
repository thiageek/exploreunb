<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_aula extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function salvar_aula($data) {
		return $this->db->insert('tb_aula', $data);
	}
	
	function editar_aula($id, $data) {
		$this->db->where('id_aula', $id);
		return $this->db>update('tb_aula',$data);
	}

}