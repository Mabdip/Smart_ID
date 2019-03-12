<?php 
    $this->load->view('homepage/template/header');
    $this->load->view('homepage/template/navbar-aside');
    $this->load->view($content);
    $this->load->view('homepage/template/footer');
?>