<?php
     class news extends CI_controller {
     	   public function __construct()
       	   {
       	     	parent:: __construct();      //it calls the parent class ci_controller construct
       	    	$this->load->model('news_model');
     	   }

     	   public function index()
     	   {
     	   	    $data['news'] = $this->news_model->get_news();
     	   	    $data['title'] = 'News Headlines';

     	   	    $this->load->view('news/index', $data);
       	 }

       	   public function view($slug =NULL)
       	   {
       	   	    $data['news_item'] = $this->news_model->get_news($slug);
       	   	    if (empty($data['news_item'] ))
       	   	    {
       	   	    	show_404();
       	   	    }
                 
                $data['title'] = 'News item';
     	   	      $this->load->view('news/index', $data);
     	   	      
       	   	   
       	   }
           
     }