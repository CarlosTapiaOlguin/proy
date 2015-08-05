<?php
class Usuario_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

  function ValidarUsuario($email,$password){
      $this->db->select('id,user,imgperfil,nombre,apellidos,ciudad,correo');
      $this->db->where('pass', $password);
      $this->db->where('correo', $email);
      $query = $this->db->get('usuarios');
      return $query->row();
   }

   function nuevoUsuario($email,$password)
   {
       $data = array(
            'email' => $email,
            'password' => $password
        );
        return $this->db->insert('usuarios', $data);  
    }

}