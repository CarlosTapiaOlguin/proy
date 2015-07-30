<?php
class Categoria_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

   function getCategorias()
   {
      $query = $this->db->get('categorias'); 
      return $query->result();
    }
}