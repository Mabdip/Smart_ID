<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_m extends CI_Model 
{
    function tambah_guru($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }
    
    function tambah_siswa($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

}

/* End of file ModelName.php */
