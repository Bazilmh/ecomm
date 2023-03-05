<?php 
   Class Db_ops extends CI_Model {
	/*
   CREATE TABLE product (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(256) NOT NULL,
    category VARCHAR(256), mrp FLOAT, selling_price FLOAT, size VARCHAR(256),color VARCHAR(256), description LONGTEXT,image LONGTEXT);
    */
      Public function __construct() { 
         parent::__construct(); 
		 
		 $this->load->database();
		
      } 


      public function insert_product($data)
      {

      $this->db->insert('product',$data);

      }

      public function get_products()
      {
      
      $line = "SELECT DISTINCT name FROM product";
      $query = $this->db->query($line);
      $res = $query->result();
      return $res;

      }

      public function get_product($name)
      {
      
      $line = "SELECT * FROM product WHERE name = '$name' ";
      $query = $this->db->query($line);

      $res = $query->row();

      return $res;
      

      }

      public function get_products_json()
      {

      $line = "SELECT DISTINCT name,category,description FROM product";
      $query = $this->db->query($line);

      $res = json_encode($query->result());
      return $res;

      
      }

      public function get_categories_json()
      {

      $line = "SELECT DISTINCT category FROM product";
      $query = $this->db->query($line);

      $res = json_encode($query->result());
      return $res;

      
      }

      public function get_variants_json($name)
      {

      $line = "SELECT * FROM product WHERE name ='$name'";
      $query = $this->db->query($line);

      $res = json_encode($query->result());
      return $res;

      
      }

      public function get_image_json($name)
      {
      
         $line = "SELECT image FROM product WHERE name ='$name'";
         $query = $this->db->query($line);
   
         $res = json_encode($query->row());
         return $res;


      }
















	  
	   	  
		
   } 
?>