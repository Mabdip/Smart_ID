<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function template($in, $data)
	{
		return $this->load->view($in.'/template/layout', $data);
	}
	public function post($name)
	{
		return $this->input->post($name);
	}
	public function msg($msg, $type = 'success')
	{
		return $this->session->set_flashdata('msg', '<div class="alert alert-'.$type.' alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$msg.'</div>');
	}
}