<?php
class Home extends CI_Controller {

	function __construct(){
      parent::__construct();
      $this->load->model('usuario_model');
   }



	function index()
	{

		$this->load->view('include/headerTemplate');
		$this->getCategorias();
		$this->load->model('producto_model');
		$this->load->view('homeTemplate');
		$this->load->view('include/footerTemplate');
	}

	public function getCategorias(){
		$this->load->model('categoria_model');
		$this->load->model('region_model');
		$this->load->view('categoriasTemplate');
	}
}
