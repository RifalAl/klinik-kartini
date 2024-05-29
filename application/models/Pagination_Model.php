<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_Model extends CI_Model {

public function getResepObat($limit, $start) {
    $this->db->limit($limit, $start);
    $query = $this->db->get('tbl_kartu_pasien'); // Nama tabel
    return $query->result();
}

public function searchResepObat($keyword, $limit, $start) {
    $this->db->like('nama', $keyword); // Ganti 'nama' dengan kolom yang relevan
    $this->db->limit($limit, $start);
    $query = $this->db->get('tbl_kartu_pasien'); // Nama tabel
    return $query->result();
}

public function countAllResepObat() {
    return $this->db->count_all('tbl_kartu_pasien'); // Nama tabel
}

public function countSearchResepObat($keyword) {
    $this->db->like('nama', $keyword); // Ganti 'nama' dengan kolom yang relevan
    $this->db->from('tbl_kartu_pasien'); // Nama tabel
    return $this->db->count_all_results();
}
}
