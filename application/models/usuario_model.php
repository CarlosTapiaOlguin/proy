<?php
class Usuario_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

  function ValidarUsuario($email,$password){ 
      $this->db->where(array('pass'=> $this->cryptPass($password),'correo' => $email));  
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


    public function cryptPass($pass){	
		$newPass= sha1(md5(crypt(trim($pass), "_IW2013")));
		$newPass= strrev($newPass);
		$newPass= substr($newPass, 20, 20).substr($newPass, 0, 20);
		
		return $newPass;
	}

}