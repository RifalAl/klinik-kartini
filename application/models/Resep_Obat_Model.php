<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep_Obat_Model extends CI_Model 
{
    // Menampilkan data  ke dalam tabel 'Resep obat' sesuai nomor
    public function getAllResep($nomor) 
    {
        return $this->db->query("SELECT * FROM tbl_resep_obat WHERE nomor='$nomor'");
    }
    // Menampilkan data 'Resep obat' 
    public function getAllResepObat() 
    {
        return $this->db->query("SELECT * FROM tbl_resep_obat");
    }
    // simpan resep obat
    public function simpan_resep($data) {
        $this->db->insert('tbl_resep_obat', $data);
    }
    public function hapus($id_resep) {
        return $this->db->query("DELETE FROM tbl_resep_obat WHERE id_resep='$id_resep'");
    }
    public function tampilResep($id_resep) 
    {
       return $this->db->query("SELECT * FROM tbl_resep_obat WHERE id_resep='$id_resep'");
    }
    // print
    public function print($id_resep) {
        // return $this->db->query("SELECT * FROM tbl_resep_obat WHERE id_resep='$id_resep'");    
        $this->db->select('*');
        $this->db->from('tbl_kartu_pasien');
        $this->db->where('id_resep', $id_resep);
        $this->db->join('tbl_resep_obat', 'tbl_resep_obat.nomor = tbl_kartu_pasien.nomor');
        $query = $this->db->get();
        return $query->result();
    }
    public function editResep($data, $id_resep) 
    {
        $this->db->where('id_resep', $id_resep);
        $this->db->update('tbl_resep_obat', $data);
    }
    public function tampilResepById($id_resep)
    {
        return $this->db->get_where('tbl_resep_obat', array('id_resep' => $id_resep))->row();
    }
    public function resepObat($limit = null, $offset = null) 
    {
        $this->db->select('*');
        $this->db->from('tbl_kartu_pasien');
        $this->db->join('tbl_resep_obat', 'tbl_resep_obat.nomor = tbl_kartu_pasien.nomor');

        if ($limit !== null && $offset !== null) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get();
        return $query->result();
    }
    public function jumlahResep() {
        return $this->db->count_all('tbl_resep_obat');
    }
    public function countAll(){
        return $this->db->count_all('tbl_resep_obat');
    }
    public function getResepById($id_resep)
    {
        $this->db->select('nomor');
        $this->db->from('tbl_resep_obat');
        $this->db->where('id_resep', $id_resep);
        $query = $this->db->get();
        return $query->row();
    }
    public function get_data_between_dates($tgl_mulai, $tgl_akhir) {
        // Query untuk mengambil data dari database berdasarkan tanggal
        $query = $this->db->query("SELECT *
        FROM tbl_kartu_pasien AS kp
        JOIN tbl_resep_obat AS ro ON kp.nomor = ro.nomor
        WHERE ro.tgl_periksa BETWEEN '$tgl_mulai' AND '$tgl_akhir'");
        return $query->result();
    }
}