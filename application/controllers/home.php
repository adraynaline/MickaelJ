<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
define('PAGE_CSS','home');
define('PAGE_NAME','HOME');
class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layout/headerhome');
		$this->load->view('home');
		$this->load->view('layout/footerhome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */