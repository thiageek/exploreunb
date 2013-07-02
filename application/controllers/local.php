<?php if (!defined('BASEPATH')) die();
class Local extends Main_Controller {

   	function __construct() {
		parent::__construct();
		$this->load->model('model_local');
	}
	
	public function index()
	{
      $this->load->view('include/header');
      $this->load->view('local/local');
      $this->load->view('include/footer');
	}
	
	public function novo(){
		$this->load->view('include/header');
      	$this->load->view('local/form');
      	$this->load->view('include/footer');
	}
	
	public function editar(){
		$data['op'] = 'editar';

		$this->load->view('include/header');
		$this->load->view('local/form', $data);
		$this->load->view('include/footer');
	}
	
	public function salvar(){
		$op = $this->input->post('op');
		$local['local'] = $this->input->post('local');
		$local['numero'] = $this->input->post('numero');
		$local['tipo'] = $this->input->post('tipo');
		$local['predio'] = $this->input->post('predio');
		
		if($op == 'salvar'){
			$this->model_local->salvar_local($local);
		}else{
			$id = $this->input->post('id');
			$this->model_local->editar_local($id, $local);
		}
		
		$this->load->view('include/header');
        $this->load->view('local/local');
        $this->load->view('include/footer');
	}
   
}

?>

