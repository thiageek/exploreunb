<?php if (!defined('BASEPATH')) die();
class Explorer extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('pagina1');
      $this->load->view('include/footer');
	}
   
}

?>

