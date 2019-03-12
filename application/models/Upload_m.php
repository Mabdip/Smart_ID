<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_m extends CI_Model 
{
    public function upload_foto()
    {
        $config['upload_path'] = './gambar/guru/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 1024;
        $config['file_name'] = $this->id;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) 
            {
                return $this->upload->data("file_name");
            }

            return "default.jpg";
    }

    public function simpan()
    {
        
    }
    

}

/* End of file Upload_m.
php */
    