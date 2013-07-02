<?php if (!defined('BASEPATH')) die();
class Cardapio extends Main_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_cardapio');
	}
	
	public function index()
	{
      $this->load->view('include/header');
      $this->load->view('cardapio/index');
      $this->load->view('include/footer');
	}
	
	public function novo(){
		$this->load->view('include/header');
      	$this->load->view('cardapio/form');
      	$this->load->view('include/footer');
	}
	
	public function editar(){
		$data['op'] = 'editar';

		$this->load->view('include/header');
		$this->load->view('cardapio/form', $data);
		$this->load->view('include/footer');
	}
	
	public function salvar(){
		$op = $this->input->post('op');
		$cardapio['semana'] = $this->input->post('semana');
		$cardapio['endereco'] = $this->input->post('endereco');
		$cardapio['tb_lanchonete_id_lanchonete'] = $this->input->post('lanchonete');
		
		if($op == 'salvar'){
			$this->model_cardapio->salvar_cardapio($cardapio);
		}else{
			$id = $this->input->post('id');
			$this->model_cardapio->editar_cardapio($id, $cardapio);
		}
		
		$this->load->view('include/header');
        $this->load->view('cardapio/index');
        $this->load->view('include/footer');
	}
   
}

?>

