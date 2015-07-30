<?php
class Region_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

   function getRegiones()
   {
      $query = $this->db->get('regiones'); 
      return $query->result();
    }

   function getRegion()
   {
      $this->db->where('codigo','13');  
      $query = $this->db->get('regiones');
      return $query->result()[0];
    }
}