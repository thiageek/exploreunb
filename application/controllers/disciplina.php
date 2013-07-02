<?php
if (!defined('BASEPATH'))
	die();
class Disciplina extends Main_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('model_disciplina');
	}

	public function index() {
		$this -> load -> view('include/header');
		$this -> load -> view('pagina1');
		$this -> load -> view('include/footer');
	}

	public function novo() {
		$data['op'] = 'novo';
		
		$this -> load -> view('include/header');
		$this -> load -> view('disciplina/_form', $data);
		$this -> load -> view('include/footer');
	}
	
	public function editar() {
		$data['op'] = 'editar';
		
		$this -> load -> view('include/header');
		$this -> load -> view('disciplina/_form', $data);
		$this -> load -> view('include/footer');
	}

	public function salvar() {
		$op = $this -> input -> post('disciplina');
		
		$disciplina['disciplina'] = $this -> input -> post('disciplina');
		$disciplina['codigo'] = $this -> input -> post('codigo');
		$disciplina['tb_orgao_id_orgao'] = $this -> input -> post('tb_orgao_id_orgao');

		
		if($op == 'salvar'){
			$this -> model_disciplina -> salvar_disciplina($disciplina);
		}else{
			$id = $this -> input -> post('id');
			$this -> model_disciplina -> editar_disciplina($id, $disciplina);
		}
		$this -> load -> view('include/header');
		$this -> load -> view('pagina1');
		$this -> load -> view('include/footer');
	}

}
?>