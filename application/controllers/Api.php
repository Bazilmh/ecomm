<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

   class Api extends CI_Controller {


      Public function __construct() { 
         parent::__construct(); 
		 
		$this->load->model('db_ops');
		
      } 
	   
	      
  
      public function index() {

      echo "Products API root.";


      }

      public function get_products()
      {

         echo $this->db_ops->get_products_json();

      }

      public function get_categories()
      {

         echo $this->db_ops->get_categories_json();

      }

      public function get_variants($name)
      {

         echo $this->db_ops->get_variants_json($name);

      }

      public function get_image($name)
      {

         echo $this->db_ops->get_image_json($name);

      }






      
      






      
      


	  
   } 
?>