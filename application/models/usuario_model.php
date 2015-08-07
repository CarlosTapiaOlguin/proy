<?php
class Usuario_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

  function ValidarUsuario($email,$password){
      $this->db->select('id,user,imgperfil,nombre,apellidos,region,email');
      $this->db->where('pass', $password);
      $this->db->where('email', $email);
      $query = $this->db->get('usuarios');
      return $query->row();
   }

   function nuevoUsuario($nombre,$apellidos,$email,$pass,$region)
   {  
      $username =  explode('@', $email);
      $username = $username[0];
      if($this->existeUsername($username)){
        for ($i=1; $i < 100; $i++) { 
          $username = $username.$i;
          if (!$this->existeUsername($username)) {
            break;
          }
        }
      }


      $data = array(
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'email' => $email,
            'pass' => $pass,
            'region' => $region,
            'user'=>$username
      );
      return $this->db->insert('usuarios', $data);  
    }

    function existeCorreo($email){
      $this->db->select('email');
      $this->db->where('email', $email);
      $query = $this->db->get('usuarios');
      return $query->row(); 
    }

    function existeUsername($user){
      $this->db->select('user');
      $this->db->where('user', $user);
      $query = $this->db->get('usuarios');
      return $query->row(); 
    }

    function updateUltimoInicioSession($email){
      $fecha = date('Y-m-d H:i:s');
      $data = array(
               'ult_inic' => $fecha
            );  
      $this->db->where('email', $email);
      $this->db->update('usuarios', $data); 
    }




}