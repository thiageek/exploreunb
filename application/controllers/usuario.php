<?php
if (!defined('BASEPATH'))
	die();
class Usuario extends Main_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('model_usuario');
	}

	public function index() {
		$this -> load -> view('include/header');
		$this -> load -> view('pagina1');
		$this -> load -> view('include/footer');
	}

	public function novo() {
		$this -> load -> view('include/header');
		$this -> load -> view('usuario/_form');
		$this -> load -> view('include/footer');
	}

	public function salvar() {
		$usuario['nome'] = $this -> input -> post('nome');
		$usuario['matricula'] = $this -> input -> post('matricula');
		$usuario['tb_cursos_id_curso'] = $this -> input -> post('curso');
		$usuario['email'] = $this -> input -> post('email');
		$usuario['senha'] = $this -> input -> post('senha');

		$this -> model_usuario -> salvar_usuario($usuario);

		$this -> load -> view('include/header');
		$this -> load -> view('pagina1');
		$this -> load -> view('include/footer');
	}

}
?>

