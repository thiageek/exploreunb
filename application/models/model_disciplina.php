<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_disciplina extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this -> load -> database();
	}

	function salvar_disciplina($data) {
		return $this -> db -> insert('tb_disciplina', $data);
	}

	function editar_disciplina($id, $data) {
		$this -> db -> where('id_disciplina', $id);
		return $this -> db -> update('tb_disciplina', $data);
	}

}
