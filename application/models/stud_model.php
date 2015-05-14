<?php
       // construct a model class inheriting form parent CI_Model class
    class Stud_model extends CI_Model {
            public function __construct() {
            	  parent:: __construct();
            	  //load the database from where u want to extract student info
            	  $this->load->database();
            }
            public function get_details( $name = FALSE) {
            	 IF($name == FALSE)
                  {
            	       $query = $this->db->query('SELECT * FROM student');
            	       return $query->result_array();
            	  }

            	      $query = $this->db->query('SELECT name, admn_no, hostel, date FROM student
            	      	                           WHERE name ="'.$name.'"');
            }

   }