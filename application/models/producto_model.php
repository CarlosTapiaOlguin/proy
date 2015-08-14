<?php
class Producto_model extends CI_Model{

  public function __construct() {
    parent::__construct();
    $this->load->database(); 
  }

   function getProductos($cantidad)
   {
      $this->db->join('usuarios', 'usuarios.id = productos.user');
      $this->db->where('status','2');  
      $this->db->order_by("fecha_public", "desc");
      $query = $this->db->get('productos',$cantidad);
      return $query->result();
    }
    
    function getProductosCategoria($categoria, $pagina)
    {
      $cantidad = 48;
      $desde = ($pagina-1)*48;
      $this->db->join('usuarios', 'usuarios.id = productos.user');
      $this->db->join('categorias', 'categorias.id = productos.categ');
      $this->db->where('url_categoria ',$categoria);  
      $this->db->where('status','2');  
      $this->db->order_by("fecha_public", "desc");
      $query = $this->db->get('productos',$cantidad , $desde);
      return $query->result();
    }

    function getProductosCategoriaCantidad($categoria)
    {
      $this->db->join('usuarios', 'usuarios.id = productos.user');
      $this->db->join('categorias', 'categorias.id = productos.categ');
      $this->db->where('url_categoria ',$categoria);  
      $this->db->where('status','2');  
      $this->db->from('productos');
      return $this->db->count_all_results();
    }


    function getProductosBusqueda($busqueda,$pagina){

      $cantidad = 48;
      $desde = ($pagina-1)*48;
      $this->db->join('usuarios', 'usuarios.id = productos.user');
      $this->db->where('MATCH (titulo) AGAINST ("'.$busqueda.'")');  
      $this->db->where('status','2');  
      $this->db->order_by("fecha_public", "desc");
      $query = $this->db->get('productos',$cantidad , $desde);
      return $query->result();
    }

    function getProductosBusquedaCantidad($busqueda){

      $this->db->join('usuarios', 'usuarios.id = productos.user');
      $this->db->where('MATCH (titulo) AGAINST ("'.$busqueda.'")');  
      $this->db->where('status','2');  
      $this->db->from('productos');
      return $this->db->count_all_results();
    }


    function modificarTituloProductos()
   {
      $query = $this->db->get('productos');

      foreach ($query->result() as $prod) {
        $data =  array('titulo' =>  ucwords(strtolower($prod->titulo)));
        $this->db->update('productos', $data, "id = ".$prod->id ); 
      }
    }



}