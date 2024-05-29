<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_Model extends CI_Model 
{
    public function getAllData($limit = null, $offset = null, $keyword = null) 
    {
    //    return $this->db->query("SELECT * FROM tbl_kartu_pasien");
    if ($keyword) {
        $this->db->like('nama', $keyword);
    }

    if ($limit) {
        $this->db->limit($limit, $offset);
    }
    return $this->db->get('tbl_kartu_pasien');

    }
    // Menampilkan data kartu berdasarkan nomor
    public function getAllkartu($nomor) 
    {
       return $this->db->query("SELECT * FROM tbl_kartu_pasien WHERE nomor='$nomor'");
    }
    public function simpan_data($data) {
        $this->db->insert('tbl_kartu_pasien', $data);
    }
    // tampilkan data pasien sesuai nomor
    public function tampil($nomor) 
    {
       return $this->db->query("SELECT * FROM tbl_kartu_pasien WHERE nomor='$nomor'");
    }
    // edit data kartu
    public function editKartu($data, $nomor) 
    {
        $this->db->where('nomor', $nomor);
        $this->db->update('tbl_kartu_pasien', $data);
    }
    // print
    public function print() {
        return $this->db->query("SELECT * FROM tbl_kartu_pasien WHERE nomor='nomor'")->result();
    }
    // <!-- data perbulan untuk jumlah kartu -->
   public function getMonthlyKartu() 
    {
        // Mengambil jumlah pengaduan per bulan
        $query = $this->db->query("SELECT 
                                    MONTH(tanggal) as bulan,
                                    COUNT(*) as jumlah
                                FROM tbl_kartu_pasien 
                                WHERE YEAR(tanggal) = YEAR(NOW())
                                GROUP BY bulan");
        return $query->result();
    }

    // Mengambil jumlah pasien per tahun
    public function getPertahun() 
    {  
        $query = $this->db->query("SELECT 
                                    YEAR(tanggal) as tahun,
                                    SUM(CASE WHEN status = 'Aktif' THEN 1 ELSE 0 END) as Aktif,
                                    SUM(CASE WHEN status = 'Nonaktif' THEN 1 ELSE 0 END) as Nonaktif
                                FROM tbl_kartu_pasien 
                                GROUP BY tahun");

        return $query->result();
    }
    public function searchResepObat($keyword)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('nomor', $keyword);
        $query = $this->db->get('tbl_kartu_pasien');
        return $query->result();
    }
    public function ResepObat()
{
    $this->db->select('*');
    $this->db->from('tbl_kartu_pasien');
    $this->db->join('tbl_resep_obat', 'tbl_resep_obat.nomor = tbl_kartu_pasien.nomor');
    $query = $this->db->get();
    return $query->result();
}

    public function countAll($keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
        }

        return $this->db->count_all_results('tbl_kartu_pasien');
    }

    public function hapus($nomor) {
        return $this->db->query("DELETE FROM tbl_kartu_pasien WHERE nomor='$nomor'");
    }
    public function jumlahKartu() {
        // return $this->db->count_all('tbl_kartu_pasien');
        $query = $this->db->query("SELECT * FROM tbl_kartu_pasien ORDER BY nomor DESC");
        return $query->result();

    }
    public function countAlll(){
        return $this->db->count_all('tbl_kartu_pasien');
    }
    public function Kartu($limit = null, $offset = null) 
    {
        $this->db->select('*');
        $this->db->from('tbl_kartu_pasien');

        if ($limit !== null && $offset !== null) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get();
        return $query->result();
    }
    public function search($keyword)
    {
        $query = $this->db->query("SELECT * FROM tbl_kartu_pasien WHERE nama LIKE '%$keyword%'");
    
        return $query->result();
    }
}