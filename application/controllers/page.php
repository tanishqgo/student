<?php
class Page extends CI_controller {
	  public function view ( $name = 'msg')
	  {
	  	 if ( !file_exists(APPPATH.'/views/pages/'.$name.'.php'))
	  	{
	  	 	show_404();

	  	 }

	  	$data['title'] = 'welcome';
	  	$this->load->view('/templates/header.php', $data);
	  	$this->load->view('/pages/msg.php');
	  	$this->load->view('/pages/about.php');
 	 	$this->load->view('/pages/home.php');
	  	$this->load->view('/templates/footer.php');
	  }
}