<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('PAGE_NAME','ADMINISTRATION ');
class Admin extends CI_Controller {

	function __construct()
   	{
   	  parent::__construct(); 
   	}
	public function index()

	{
		define('PAGE_CSS','general');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/login');
		$this->load->view('admin/layout/footer');
	}
	function home()
	
 	{
 		define('PAGE_CSS','admin');
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('admin/layout/header',$data);

     $this->load->view('admin/home');
     //$this->load->view('admin/add_modal');
     $this->load->view('admin/layout/footer');
     
   }
   else
   {
     //If no session, redirect to login page
     redirect('adminlogin', 'refresh');
   }
 }
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('adminlogin', 'refresh');
 }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */