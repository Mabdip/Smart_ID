<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller 
{
      public function __construct() 
   {
        parent::__construct();   
        
        if($this->session->userdata('status') != 'login')
        {
                redirect('login', 'refresh');
        }
        
   }
    
      public function index() 
   {
         $this->data['title']   = "Welcome";
         $this->data['content'] = 'admin/main';
         $this->load->view('admin/template/layout',$this->data); 
   }

      public function logout()
    {
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
        

    
}