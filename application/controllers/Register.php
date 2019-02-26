<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller 
{
    
    public function __construct() 
    {
        parent::__construct();
    }

    public function index() 
    {
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'login/pilihan';
        $this->load->view('login/template/layout',$this->data);
    }
    
    public function regis_siswa()
    {
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'login/register';
        $this->load->view('login/template/layout',$this->data);
    }

    public function regis_guru()
    {
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'login/register_guru';
        $this->load->view('login/template/layout',$this->data);
    }

}