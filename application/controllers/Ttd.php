<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ttd extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
        $this->load->model('Kartu_Model');
		$this->load->helper('url');
		$this->load->library('session');
	}

    public function update_ttd()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_ttd = $this->input->post('id_ttd', TRUE);
        $nama = $this->input->post('nama', TRUE);

        // Inisialisasi variabel untuk menyimpan nama file ttd
        $ttd = '';

        // Proses upload gambar jika ada
        if (isset($_FILES['ttd']) && $_FILES['ttd']['error'] !== UPLOAD_ERR_NO_FILE) {
            $config['upload_path'] = './Upload/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 0; 
            $config['max_width'] = 0; 
            $config['max_height'] = 0; 

            // Load library upload 
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('ttd')) {
                $error = $this->upload->display_errors();
                echo "Upload gagal: " . $error;
                return; 
            }

            // Ambil nama file ttd
            $ttd = $this->upload->data('file_name');
        }

        // Data yang akan diupdate
        $data = array(
            'nama' => $nama,
        );

        // Jika ada ttd yang diupload, tambahkan data ttd ke dalam array
        if (!empty($ttd)) {
            $data['ttd'] = $ttd;
        }

        // Lakukan update berita
        $this->db->where('id_ttd', $id_ttd);
        $this->db->update('tbl_ttd', $data);

        $this->session->set_flashdata('success', 'Data berhasil diupdate');

        redirect('Data/data_pasien');
    }
}

}