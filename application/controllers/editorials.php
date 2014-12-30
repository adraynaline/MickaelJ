<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
define('PAGE_CSS','admin');
class Editorials extends CI_Controller {

	function __construct()
   	{
   	  parent::__construct();
      $this->load->model('Edito_model');
  $this->load->library('form_validation');
  $this->load->library('session'); 
   	}
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('admin/layout/header',$data);

     
     $this->load->view('admin/edito');
     $this->load->view('admin/layout/footer');
     
   }
   else
   {
     //If no session, redirect to login page
     redirect('adminlogin', 'refresh');
   }
	}
	
 function add(){
     $status = "";
      $msg = "";
      $file_element_name = 'userfile';       
      if (empty($_POST['name_edito']))
      {
          $status = "error";
          $msg = "Please enter a Name";
      }       
      if ($status != "error")
      {
          $config['upload_path'] = './files/';
          $config['allowed_types'] = 'gif|jpg|png|doc|txt';
          $config['max_size'] = 1024 * 8;
          $config['encrypt_name'] = TRUE;
   
          $this->load->library('upload', $config);
   
          if (!$this->upload->do_upload($file_element_name))
          {
              $status = 'error';
              $msg = $this->upload->display_errors('', '');
          }
          else
          {
              $data = $this->upload->data();
              $file_id = $this->Edito->insert_file($data['file_name'], $_POST['name_edito'],$_POST['name_serie'],$_POST['photographer'],$_POST['hair'],$_POST['makeup'],$_POST['stylist'],$_POST['sexe']);
              
              if($file_id)
              {
                  
                  $status = "success";
                  $msg = "File successfully uploaded";
              }
              else
              {
                  unlink($data['full_path']);
                  $status = "error";
                  $msg = "Something went wrong when saving the file, please try again.";
              }
          }
          @unlink($_FILES[$file_element_name]);
      }
      else {
        echo 'erreir';
      }
      echo json_encode(array('status' => $status, 'msg' => $msg));
    
 }
 function delete($id) {
   // $this->Editorial_model->delete_editorial($id);
    //$this->Editorial_model->delete_editorial_and_img($id);
    
    //redirect('editorial','refresh');
  }
 function update(){

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