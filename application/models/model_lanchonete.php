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
	
	function get_lanchonete($nome)
	{	
		if($nome == 'all'){
			$this->db->select('*');
			$this->db->from('tb_lanchonete');
			$this->db->join('tb_coordenada', 'tb_lanchonete.id_coordenada = tb_coordenada.id_coordenada');
			$query = $this->db->get();
			return $query->result_array(); 
		}else{
			$this->db->like('lanchonete', $nome);
			$this->db->select('*');
			$this->db->from('tb_lanchonete');
			$this->db->join('tb_coordenada', 'tb_lanchonete.id_coordenada = tb_coordenada.id_coordenada');
			$query = $this->db->get();
			return $query->result_array();
		}	
	}

}