<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_Medis_Model extends CI_Model 
{
    // Menampilkan data pengaduan ke dalam tabel 'Resep obat'
    public function getAllRekamMedis($nomor) 
    {
       return $this->db->query("SELECT * FROM tbl_rekam_medis WHERE nomor='$nomor'");
    }
    // simpan resep obat
    public function simpanRekamMedis($data) {
        $this->db->insert('tbl_rekam_medis', $data);
    }
    // print
    public function print($nomor) {
        // return $this->db->query("SELECT * FROM tbl_rekam_medis WHERE nomor='$nomor'");
        $this->db->select('*');
        $this->db->from('tbl_kartu_pasien');
        $this->db->where('tbl_kartu_pasien.nomor', $nomor);
        $this->db->join('tbl_rekam_medis', 'tbl_rekam_medis.nomor = tbl_kartu_pasien.nomor');
        $query = $this->db->get();
        return $query->result();    
    }
    // jumlah data
    public function jumlah($nomor) 
    {
        $sql = "SELECT COUNT(*) as jumlah FROM tbl_rekam_medis WHERE nomor = ?";
        $query = $this->db->query($sql, array($nomor));
        return $query->row()->jumlah;
    }
    public function editRekam($data, $id_rm) 
    {
        $this->db->where('id_rm', $id_rm);
        $this->db->update('tbl_rekam_medis', $data);
    }
    public function hapus($id_rm) {
        return $this->db->query("DELETE FROM tbl_rekam_medis WHERE id_rm='$id_rm'");
    }
    public function tampilRekam($id_rm)
    {
        return $this->db->get_where('tbl_rekam_medis', array('id_rm' => $id_rm))->row();
    }

}