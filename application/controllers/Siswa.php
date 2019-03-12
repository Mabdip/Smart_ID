<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller 
{
    public function __construct() 
    {
        parent:: __construct();  
    }

    public function index()
    {
        $this->data['title'] = "Iin Profile";
        $this->data['content'] = 'profile/siswa';
        $this->load->view('profile/template/layout', $this->data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/login_siswa');
        
    }

}

/* End of file Profile.php */
?>