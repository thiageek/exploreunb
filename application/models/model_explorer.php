<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_explorer extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function verifica_obj($objeto, $opcao, $parametro){	
		$this->db->select($parametro);
		$this->db->like($parametro, $objeto);
		$query = $this->db->get($opcao);
		if($query->num_rows() >= 1){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	function verifica_lcl($objeto, $opcao, $parametro){
		$opcao_id = 'tb_local.id_local = ' . $opcao . '.id_local';	
		$this->db->select($parametro);
		$this->db->like('local', $objeto);
		$this->db->join('tb_local', $opcao_id);
		$query = $this->db->get($opcao);
		if($query->num_rows() >= 1){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}