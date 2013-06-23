<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_usuario extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function salvar_usuario($data) {
		return $this -> db -> insert('tb_usuario', $data);
	}

}
