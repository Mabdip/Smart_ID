<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        $this->load->model('login_m');
    }

    public function index() {
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'login/login';
        $this->load->view('login/template/layout',$this->data);
    }

    public function auth()
    {
       $username = $this->input->post('username');
       $password = $this->input->post('password');

       $where =   array('username' => $username ,
                        'password' => md5($password) );
       $check = $this->login_m->cek("login", $where)->num_rows();

        if($check > 0 )
        {
            $data_session  = array('nama' => $username,
                                   'status' => "login" );

            $this->session->set_userdata($data_session);
            redirect('admin', 'refresh');
        }
        else
        {
            $this->session->set_flashdata('warning', 'Username atau Password yang anda masukkan salah!');
            redirect('login','refresh');
        }
    }

    public function logout()
    {
        $this->session->session_destroy();
        redirect('login','refresh');
    }
}