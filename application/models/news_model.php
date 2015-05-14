<?php
  class news_model extends CI_Model {
  	  public function __construct()
  	  {
          parent:: __construct();
  	  	  $this->load->database();
   	  }

   	  public function get_news($slug = FALSE)
   	  {
   	  	   if($slug == FALSE)
   	  	   {
   	  	   	  $query = $this->db->query('SELECT * from news');
   	  	   	  return $query->result_array();
   	  	   }
   	  	   
           $query = $this->db->query('SELECT id,title,text from news where slug="'.$slug.'"');
   	  	   return $query->result_array();

   	  }
  }