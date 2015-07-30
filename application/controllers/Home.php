<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('include/header');
		
		require_once('Categorias.php');
		$cat = new Categorias();
		$cat->getCategorias();

		$this->load->model('producto_model');
		$this->load->view('home');
		
		$this->load->view('include/footer');
	}
}
