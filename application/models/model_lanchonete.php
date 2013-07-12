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
	
	function get_lanchonete_nome($nome)
	{	
		if($nome == 'all'){
			$query = $this->db->get('tb_lanchonete');
			return $query->result_array(); 
		}else{
			$this->db->where('id_local', $id);
			$query = $this->db->get('tb_local');
			return $query->result();
		}	
	}

}