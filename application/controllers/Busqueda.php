<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busqueda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function busquedaPorCategoria($categoria , $pagina=1){

		$this->load->view('include/headerTemplate');
		$this->load->model('producto_model');
		$data['categoria'] = $categoria;
		$data['pagina'] = $pagina;
		$data['totalPaginas'] = intval($this->producto_model->getProductosCategoriaCantidad($categoria)/48);
		$this->getCategorias();
		$this->load->view('busquedaTemplate',$data);
		$this->load->view('include/footerTemplate');
	}


	public function getCategorias(){
		$this->load->model('categoria_model');
		$this->load->model('region_model');
		$this->load->view('categoriasTemplate');
	}
}