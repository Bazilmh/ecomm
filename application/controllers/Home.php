<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

   class Home extends CI_Controller {


      Public function __construct() { 
         parent::__construct(); 
		 
		$this->load->model('db_ops');
		
      } 
	   
	      

      public function admin() {
		if($_SERVER["REQUEST_METHOD"] == "POST")
      {
      
      if($_POST['prod_type'] == 'new')
      redirect('home/add');
      else
      redirect('home/variant/'.$_POST['prod_name']);

   
      }
      else
      {
         $this->data = $this->db_ops->get_products();
         $this->load->view("admin");
      }
        } 


      public function add() {
		  
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {

      //print_r($_POST);
      $data = $_POST;
      $data['image'] = 'assets/images/'.$_FILES['image']['name'];

      $this->db_ops->insert_product($data);

            $config['upload_path']          = 'assets/images';
			   $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
			   $config['file_name']			= $_FILES['image']['name'];

            $this->load->library('upload', $config);

	         $this->upload->do_upload('image');

            redirect('home/admin');
      }
      else
      {
         $this->load->view("add_product");
      }
        
      
      } 


      public function variant($name) 
      {
		  
         if($_SERVER["REQUEST_METHOD"] == "POST")
         {
   
         print_r($this->db_ops->get_product($name));
         $d = $this->db_ops->get_product($name);
         $data = $_POST;
         $data['name'] = $d->name;
         $data['category'] = $d->category;
         $data['description'] = $d->description;
         $data['image'] = 'assets/images/'.$_FILES['image']['name'];
   
         $this->db_ops->insert_product($data);
   
               $config['upload_path']          = 'assets/images';
               $config['allowed_types']        = 'gif|jpg|png|jpeg';
               $config['max_size']             = 0;
               $config['max_width']            = 0;
               $config['max_height']           = 0;
               $config['file_name']			= $_FILES['image']['name'];
   
               $this->load->library('upload', $config);
   
               $this->upload->do_upload('image');

               redirect('home/admin');
         }
         else
         {  
            $this->name = $name;
            $this->load->view("add_variant");
         }

      }




	  
   } 
?>