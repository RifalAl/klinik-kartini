<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ttd_Model extends CI_Model 
{
    public function ttd()
    {
        return $this->db->query("SELECT * FROM tbl_ttd WHERE id_ttd='1'");
    }
}