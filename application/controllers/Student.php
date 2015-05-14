<?php
  //  make the student class inherit from parent class CI_controller
   class Student extends CI_controller 
   {
  	    public function __construct()
  	    {
  	    	// call the parent class construct 
  	    	   parent:: __construct();
  	    	   $this->load->model('stud_model');
  	    }

  	    public function index()
  	    {
  	        $data['info'] = $this->stud_model->get_details();
  	        $data['title']= 'students_details';

  	        $this->load->view('student/stud_view',$data);
        }
        public function view($name = NULL)
        {
        	$data['info'] = $this->stud_model->get_details($name);
        	if(empty($data['$name']))
        	{
        		show_404();
        		echo ' no student with this name ';
        	}

        	$data['title']= '$details of $name are  are:';
        	$this->load->view('student/stud_view',$data);
        }
    }    