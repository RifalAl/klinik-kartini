<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pasien extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kartu_Model');
		$this->load->model('Ttd_Model');
		$this->load->model('Kartu_Model');
        $this->load->model('Resep_Obat_Model');
		$this->load->model('Rekam_Medis_Model');
		$this->load->library('session');
		$this->load->helper('url');
	}
    public function index($nomor)
    {
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
            redirect('Login'); 
        }

        // Ambil flashdata untuk pesan data ditambah (jika ada)
        $data['pesan'] = $this->session->flashdata('success');

        // Ambil flashdata untuk pesan data dihapus (jika ada)
        $data['delete'] = $this->session->flashdata('delete');

        // Ambil flashdata untuk pesan data dihapus (jika ada)
        $data['update'] = $this->session->flashdata('update');

        // Ambil data pasien berdasarkan nomor
        $data['tampil'] = $this->Kartu_Model->tampil($nomor)->result();

        // Data kartu
        $data['kartu_pasien'] = $this->Kartu_Model->getAllkartu($nomor)->result();

        // Ambil data resep berdasarkan nomor
        $data['resep'] = $this->Resep_Obat_Model->getAllResep($nomor)->result();

        // Data rekam medis
        $data['rekam_medis'] = $this->Rekam_Medis_Model->getAllRekamMedis($nomor)->result();

        // Jumlah data
        $data['jumlahData'] = $this->Rekam_Medis_Model->jumlah($nomor);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data_pasien/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function Informasi_pasien($nomor)
    {
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
            redirect('Login'); 
        }

        // Ambil flashdata untuk pesan data ditambah (jika ada)
        $data['pesan'] = $this->session->flashdata('success');

        // Ambil flashdata untuk pesan data dihapus (jika ada)
        $data['delete'] = $this->session->flashdata('delete');

        // Ambil flashdata untuk pesan data dihapus (jika ada)
        $data['update'] = $this->session->flashdata('update');

        // Ambil data pasien berdasarkan nomor
        $data['tampil'] = $this->Kartu_Model->tampil($nomor)->result();

        // Data kartu
        $data['kartu_pasien'] = $this->Kartu_Model->getAllkartu($nomor)->result();

        // Ambil data resep berdasarkan nomor
        $data['resep'] = $this->Resep_Obat_Model->getAllResep($nomor)->result();

        // Data rekam medis
        $data['rekam_medis'] = $this->Rekam_Medis_Model->getAllRekamMedis($nomor)->result();

        // Jumlah data
        $data['jumlahData'] = $this->Rekam_Medis_Model->jumlah($nomor);

        $data['ttd'] = $this->Ttd_Model->ttd()->result();


        $this->load->view('template/header');
        $this->load->view('template/navbar_dokter');
        $this->load->view('data_pasien/datapasien_dokter', $data);
        $this->load->view('ttd/index');
        $this->load->view('template/footer', $data);
}

	
}