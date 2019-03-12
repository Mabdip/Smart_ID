<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller 
{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('regis_m');
        
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

    public function tambah_guru()
    {
        $id = $this->input->post('Id'); 
        $nama = $this->input->post('Nama');
        $email = $this->input->post('Email');
        $alamat = $this->input->post('Alamat');
        $tempat_lahir = $this->input->post('Tempat_Lahir');
        $tanggal_lahir = $this->input->post('Tanggal_Lahir');
        $no_tlp = $this->input->post('No_tlp');
        $password = $this->input->post('Password');
        $mapel = $this->input->post('Mapel');
        
        //upload gambar
            $config['upload_path'] = './gambar/guru/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 1024;
            $config['overwrite'] = true;

                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('Image');
                
                $data_image = $this->upload->data('file_name');
                $location = base_url().'gambar/guru/';
                $img = $location.$data_image;

                $data =  array('Id' => $id,
                               'Nama' => $nama,
                               'Email' => $email,
                               'Alamat' => $alamat,
                               'Tempat_Lahir' => $tempat_lahir,
                               'Tanggal_Lahir' => $tanggal_lahir,
                               'No_tlp' => $no_tlp,
                               'Password' => $password,
                               'Mapel' => $mapel,
                               'Img'  => $img);

        $this->regis_m->tambah_guru('guru', $data);
        $this->session->set_flashdata('success', 'Selamat Pendaftaran Berhasil!!');
        redirect('register/regis_guru', 'refresh');

        exit();
    }

    public function tambah_siswa()
    {
        $id = $this->input->post('Id'); 
        $nama = $this->input->post('Nama');
        $email = $this->input->post('Email');
        $alamat = $this->input->post('Alamat');
        $tempat_lahir = $this->input->post('Tempat_Lahir');
        $tanggal_lahir = $this->input->post('Tanggal_Lahir');
        $no_tlp = $this->input->post('No_tlp');
        $password = $this->input->post('Password');

                $data =  array('Id' => $id,
                               'Nama' => $nama,
                               'Email' => $email,
                               'Alamat' => $alamat,
                               'Tempat_Lahir' => $tempat_lahir,
                               'Tanggal_Lahir' => $tanggal_lahir,
                               'No_tlp' => $no_tlp,
                               'Password' => $password);

        $this->regis_m->tambah_siswa('siswa', $data);
        $this->session->set_flashdata('success', 'Selamat Pendaftaran berhasil!!!');
        redirect('register/regis_siswa', 'refresh');

        exit();

    }

}