<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
    }

    public function index() {
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'login/login';
        $this->load->view('login/template/layout',$this->data);
    }
}