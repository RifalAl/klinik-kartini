<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep_Obat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Resep_Obat_Model');
		$this->load->library('session');
		$this->load->helper(array('url'));
	}
    public function tambahResepObat()
    {
        $data = [
			'nama_obat'       => $this->input->post('nama_obat'),
            'jumlah'          => $this->input->post('jumlah'),
			'aturan'          => $this->input->post('aturan'),
            'nomor'           => $this->input->post('nomor')
        ];
                // Menyimpan data pasien
                $this->Resep_Obat_Model->simpan_resep($data);

                // notifikasi alert
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan');

            // Redirect ke halaman Data
            redirect('Data_Pasien/index/' . $data['nomor']);
    }
    public function hapusResep()
    {
        // Ambil id_resep dan nomor dari input POST
        $id_resep = $this->input->post('id_resep');
        $nomor = $this->input->post('nomor');
    
        // Ambil nomor dari database berdasarkan id_resep
        $resep = $this->Resep_Obat_Model->getResepById($id_resep);
        $nomor = $resep->nomor;
    
        // Hapus resep dari database
        $this->Resep_Obat_Model->hapus($id_resep);
    
        // Set flash message
        $this->session->set_flashdata('delete', 'Data berhasil dihapus');
    
        // Redirect ke halaman data pasien
        redirect('Data_Pasien/index/' . $nomor);
    }
    

    public function editResep()
		{
			$id_resep = $this->input->post('id_resep');
			$jumlah = $this->input->post('jumlah');
			$nama = $this->input->post('nama');
			$aturan = $this->input->post('aturan');
			$nomor = $this->input->post('nomor');

			// tampung data
			$data = [
				'nama_obat'       => $this->input->post('nama_obat'),
                'jumlah'          => $this->input->post('jumlah'),
                'aturan'          => $this->input->post('aturan'),
                'nomor'           => $this->input->post('nomor')
			];
			// kirim data dari ke model
			$this->Resep_Obat_Model->editResep($data, $id_resep);

			$this->session->set_flashdata('update', 'Data berhasil diupdate');

			redirect('Data_Pasien/index/' . $nomor);
		}

}