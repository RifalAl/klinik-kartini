<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_Medis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Rekam_Medis_Model');
		$this->load->library('session');
		$this->load->helper(array('url'));
	}
    public function tambahRekam_Medis()
    {
        $data = [
            'no_rm'        => $this->input->post('no_rm'),
			'anamnesa'        => $this->input->post('anamnesa'),
            'td'         => $this->input->post('td'),
            'suhu'         => $this->input->post('suhu'),
			'diagnosa'        => $this->input->post('diagnosa'),
            'terapi'          => $this->input->post('terapi'),
            'nomor'           => $this->input->post('nomor')
        ];
                // Menyimpan data pasien
                $this->Rekam_Medis_Model->simpanRekamMedis($data);

                // notifikasi alert
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan');

            // Redirect ke halaman Data
            redirect('Data_Pasien/index/' . $data['nomor']);
    }

    public function hapusRekam()
    {
        // Ambil id_resep dan nomor dari input POST
        $id_rm = $this->input->post('id_rm');
        $nomor = $this->input->post('nomor');
    
        // Ambil nomor dari database berdasarkan id_resep
        $rekam = $this->Rekam_Medis_Model->tampilRekam($id_rm);
        $nomor = $rekam->nomor;
    
        // Hapus resep dari database
        $this->Rekam_Medis_Model->hapus($id_rm);
    
        // Set flash message
        $this->session->set_flashdata('delete', 'Data berhasil dihapus');
    
        // Redirect ke halaman data pasien
        redirect('Data_Pasien/index/' . $nomor);
    }
    public function editRekamMedis()
		{
			$id_rm = $this->input->post('id_rm');
			$no_rm = $this->input->post('no_rm');
			$anamnesa = $this->input->post('anamnesa');
			$td = $this->input->post('td');
            $suhu = $this->input->post('suhu');
            $diagnosa = $this->input->post('diagnosa');
            $terapi = $this->input->post('terapi');
            $nomor = $this->input->post('nomor');

			// tampung data
			$data = [
                // 'id_rm'          => $this->input->post('id_rm'),
                'no_rm'          => $this->input->post('no_rm'),
                'anamnesa'       => $this->input->post('anamnesa'),
                'td'        => $this->input->post('td'),
                'suhu'        => $this->input->post('suhu'),
                'diagnosa'       => $this->input->post('diagnosa'),
                'terapi'         => $this->input->post('terapi'),
                'nomor'          => $this->input->post('nomor')
			];
			// kirim data dari ke model
			$this->Rekam_Medis_Model->editRekam($data, $id_rm);

			$this->session->set_flashdata('update', 'Data berhasil diupdate');

			redirect('Data_Pasien/index/' . $nomor);
		}

}