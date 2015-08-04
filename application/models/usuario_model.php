<?php
class Usuario_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

  function ValidarUsuario($email,$password){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
      $query = $this->db->where('correo',$email);   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
      $query = $this->db->where('pass',$password);
      $query = $this->db->get('usuarios');
      return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
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