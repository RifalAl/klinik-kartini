<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model 
{
    // Menampilkan data pengaduan ke dalam tabel 'pengaduan'
    public function getAllAkun() 
    {
       return $this->db->query("SELECT * FROM tbl_user ORDER BY id");
    }

    public function cekLogin($username, $password) {
        // cek data 
        $query = $this->db->get_where('tbl_user', array('username' => $username, 'password' => $password));
        return $query->row();
    }

    public function simpanRegister($data) {
        
        $this->db->insert('tbl_user', $data);
    }
}