<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Homepage extends CI_Controller {
	public function __construct() {
        parent::__construct();        
        
    }
    
	public function index() {
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'homepage/main';
        $this->load->view('homepage/template/layout',$this->data); 
	}
    
}