<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Resep_Obat_Model');
        $this->load->model('Rekam_Medis_Model');
        $this->load->model('Kartu_Model');
        $this->load->model('Ttd_Model');
		$this->load->helper('url');
		$this->load->library('session');
	}
    public function cetakKartu($nomor)
    {
        // Pengecekan status login
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
            redirect('Login'); // Redirect ke halaman login jika belum login
        }
       
        $data['print_kartu'] = $this->Kartu_Model->tampil($nomor)->result();

         $this->load->view('laporan_pasien/kartu_pasien', $data);
    }
    public function cetakResep($id_resep)
    {
        // Pengecekan status login
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
            redirect('Login'); // Redirect ke halaman login jika belum login
        }
    
        $data['print_resep'] = $this->Resep_Obat_Model->print($id_resep);
        $data['ttd'] = $this->Ttd_Model->ttd()->result();

        // $data['kartu_pasien'] = $this->Kartu_Model->getAllkartu($nomor)->result();
         $this->load->view('laporan_pasien/resep_obat', $data);
    }
    public function cetakRekamMedis($nomor)
    {
        // Pengecekan status login
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
            redirect('Login'); // Redirect ke halaman login jika belum login
        }
        $data['ttd'] = $this->Ttd_Model->ttd()->result();


        $data['rekam_medis'] = $this->Kartu_Model->getAllkartu($nomor)->result();
        
        $data['print_rekam_medis'] = $this->Rekam_Medis_Model->print($nomor);

         $this->load->view('laporan_pasien/rekam_medis', $data);

    }

}