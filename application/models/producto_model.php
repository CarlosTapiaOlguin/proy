<?php
class Producto_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

   function getProductos($cantidad)
   {
      $this->db->where('status','2');  
      $this->db->order_by("fecha_public", "asc"); 
      $query = $this->db->get('productos',$cantidad);
      return $query->result();
    }
}