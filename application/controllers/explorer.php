<?php if (!defined('BASEPATH')) die();
class Explorer extends Main_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_explorer');
	}

	public function index() {
		$this -> load -> view('include/header');
		$this -> load -> view('pagina1');
		$this -> load -> view('include/footer');
	}
	
	public function verifica_objeto($objeto, $opcao, $parametro){
		return $this->model_explorer->verifica_obj($objeto, $opcao, $parametro);
	}
	
	public function verifica_local($objeto, $opcao, $parametro){
		return $this->model_explorer->verifica_lcl($objeto, $opcao, $parametro);
	}

	public function pesquisar() {
		$this->load->library('session');
		
		if (!isset($_POST['objeto'])) {
			$objeto = "all";
			$opcao = "all";
		} else {
			$objeto = $_POST['objeto'];
			$opcao = $_POST['opcao'];
		}
			
		if($opcao == 'lanchonete'){
			//verifica se existe lanchonete com nome pesquisado
			$lanchonete = $this->verifica_objeto($objeto, 'tb_lanchonete', 'lanchonete');
			//verifica se existe lanchonete no local pesquisado
			$local = $this->verifica_local($objeto, 'tb_lanchonete', 'lanchonete');
			if($lanchonete == TRUE){
				session_start();
				$_SESSION['lanchonete'] = $objeto;
				redirect('/lanchonete/pesquisar');
			}else if($local == TRUE){
				redirect('/lanchonete/pesquisar');
			}else{
				redirect('/lanchonete/novo');
			}
		}
	}

}
?>

