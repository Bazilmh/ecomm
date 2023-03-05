<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

   class Customer extends CI_Controller {


      Public function __construct() { 
         parent::__construct(); 
		 
		$this->load->model('db_ops');
		
      } 
	   
	      
  
      public function index() {

      $url = "http://localhost/ecomm/api/get_products";
      $data = file_get_contents($url);

      $this->products = json_decode($data);

      $this->load->view("product_list");


      }

      public function product_details($name) {

      $url = "http://localhost/ecomm/api/get_variants/$name";
      $data = file_get_contents($url);

      $this->variants = json_decode($data);

      $this->load->view("product_details");
      
      

      }
      
      






      
      


	  
   } 
?>