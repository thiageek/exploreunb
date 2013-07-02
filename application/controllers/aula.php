<?php if (!defined('BASEPATH')) die();
class Aula extends Main_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_aula');
	}
	
	public function index()
	{
      $this->load->view('include/header');
      $this->load->view('aula/index');
      $this->load->view('include/footer');
	}
	
	public function novo(){
		$this->load->view('include/header');
      	$this->load->view('aula/form');
      	$this->load->view('include/footer');
	}
	
	public function editar(){
		$data['op'] = 'editar';

		$this->load->view('include/header');
		$this->load->view('aula/form', $data);
		$this->load->view('include/footer');
	}
	
	public function salvar(){
		$op = $this->input->post('op');
		$aula['dia'] = $this->input->post('dia');
		$aula['hora'] = $this->input->post('hora');
		$aula['sala'] = $this->input->post('sala');
		$aula['tb_turma_id_turma'] = $this->input->post('turma');
		$aula['tb_local_id_local'] = $this->input->post('local');
		$aula['tb_coordenada_id_coordenada'] = $this->input->post('coordenada');
		
		if($op == 'salvar'){
			$this->model_aula->salvar_aula($aula);
		}else{
			$id = $this->input->post('id');
			$this->model_aula->editar_aula($id, $aula);
		}
		
		$this->load->view('include/header');
        $this->load->view('aula/index');
        $this->load->view('include/footer');
	}
   
}

?>

