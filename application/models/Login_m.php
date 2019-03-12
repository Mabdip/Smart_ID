<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model
{
     public function cek($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function cek_guru($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function cek_siswa($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}





?>