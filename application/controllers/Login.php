<?php
class Login extends CI_Controller {

   function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->model('usuario_model');
      $this->load->library('form_validation');
   }

   function ingresar(){
      if(!$this->input->post('email')){
         $this->index();
      }else{                    
         $this->form_validation->set_rules('email','e-mail','required|valid_email|trim|xss_clean');      
         $this->form_validation->set_rules('password','password','required|trim|xss_clean|sha1');
         if(($this->form_validation->run()==FALSE)){ 
            $this->index();
         }else{                                      
            $datosUsuario =$this->usuario_model->ValidarUsuario($this->input->post('email'),$this->input->post('password'));  
            if($datosUsuario){  
               $this->session->set_userdata((array)$datosUsuario);
               $this->retornar();
            }else{ 
               $data['error']="email o password incorrecta, por favor vuelva a intentar";
               $this->index($data);
            }
         }
      }
   }
   

   function registro()
   {  
         
      if($this->input->post('email')){

         $this->form_validation->set_rules('nombre','Nombre','required|trim|xss_clean');
         $this->form_validation->set_rules('apellidos','Apellido','required|trim|xss_clean');
         $this->form_validation->set_rules('email','Email','required|valid_email|trim|xss_clean');
         $this->form_validation->set_rules('pass','Password','required|trim|xss_clean|sha1|min_length[5]');
         $this->form_validation->set_rules('region','Region','required|trim|xss_clean|integer');

         if($this->form_validation->run()==FALSE){
            $this->paginaRegistro();
         }else{
            if(!$this->usuario_model->existeCorreo($this->input->post('email'))){
               $insert = $this->usuario_model->nuevoUsuario(
                                                $this->input->post('nombre'),
                                                $this->input->post('apellidos'),
                                                $this->input->post('email'),
                                                $this->input->post('pass'),
                                                $this->input->post('region'));
            }else{
               $data['error']="El email ingresado ya existe.";
               $this->paginaRegistro($data);
            }
         }
      }else{
         $this->paginaRegistro();
      }
   }

   function paginaRegistro($data=null){
      $this->load->model('region_model');
      $this->load->view('registroTemplate',$data);
   }


   function retornar(){
      if(empty($_POST['referer'])){
         redirect(base_url('home'), 'refresh'); 
      }else{
         redirect($_POST['referer'], 'refresh');
      }
   }
   function index($data=null){
      $this->load->view('loginTemplate',$data);
   }

   function salir(){
      $this->session->sess_destroy();
      $this->retornar();
   }
}
?>