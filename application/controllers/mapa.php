<?php
if (!defined('BASEPATH'))
	die();
class Mapa extends Main_Controller {

	function __construct() {
		parent::__construct();
		//$this -> load -> model('model_mapa');
	}
	
	public function index(){
		$this -> load -> view('include/header');
		$this -> load -> view('mapa/mapas');
		$this -> load -> view('include/footer');
	}

	public function pagina1() {
		$this -> load -> view('mapa/mapa_pagina1');
	}

	public function lanchonete() {
		$this -> load -> view('usuario/_form', $data);
	}
	
	public function editar() {
		$data['op'] = 'editar';
		
		$this -> load -> view('include/header');
		$this -> load -> view('usuario/_form', $data);
		$this -> load -> view('include/footer');
	}

	public function salvar() {
		$op = $this -> input -> post('nome');
		
		$usuario['nome'] = $this -> input -> post('nome');
		$usuario['matricula'] = $this -> input -> post('matricula');
		$usuario['tb_cursos_id_curso'] = $this -> input -> post('curso');
		$usuario['email'] = $this -> input -> post('email');
		$usuario['senha'] = $this -> input -> post('senha');
		
		if($op == 'salvar'){
			$this -> model_usuario -> salvar_usuario($usuario);
		}else{
			$id = $this -> input -> post('id');
			$this -> model_usuario -> editar_usuario($id, $usuario);
		}
		$this -> load -> view('include/header');
		$this -> load -> view('pagina1');
		$this -> load -> view('include/footer');
	}

}
?>

