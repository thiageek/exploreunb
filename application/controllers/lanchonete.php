<?php if (!defined('BASEPATH')) die();
class Lanchonete extends Main_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_lanchonete');
	}

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('lanchonete/index');
      $this->load->view('include/footer');
	}
	
	public function novo(){
		$this->load->model('model_local');
		$data['locais'] = $this->model_local->get_local('all');
		
		$data['op'] = 'nova';
		
		$this->load->view('include/header');
      	$this->load->view('lanchonete/form', $data);
      	$this->load->view('include/footer');
	}
	
	public function editar(){
		$data['op'] = 'editar';

		$this->load->view('include/header');
		$this->load->view('lanchonete/form', $data);
		$this->load->view('include/footer');
	}
	
	public function salvar(){
		$op = $this->input->post('op');
		$lanchonete['lanchonete'] = $this->input->post('lanchonete');
		$lanchonete['tb_local_id_local'] = $this->input->post('local');
		$lanchonete['tb_coordenada_id_coordenada'] = $this->input->post('coordenada');
		
		if($op == 'nova'){
			$this->model_lanchonete->salvar_lanchonete($lanchonete);
		}else{
			$id = $this->input->post('id');
			$this->model_lanchonete->editar_lanchonete($id, $lanchonete);
		}
		
		$this->load->view('include/header');
        $this->load->view('lanchonete/index');
        $this->load->view('include/footer');
	}
	
	public function pesquisar_nome($lanchonete){
		
	}
	
	public function pesquisar(){
		
		$this->load->model('model_local');
		$data['locais'] = $this->model_local->get_local('all');
		
		session_start();
		if(isset($_SESSION['lanchonete'])){
			$data['objeto'] = $_SESSION['lanchonete'];
			session_destroy();
		}
		
		$this->load->view('include/header');
        $this->load->view('lanchonete/pesquisar', $data);
        $this->load->view('include/footer');
	}
   
}

?>

