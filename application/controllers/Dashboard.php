<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kartu_Model');
		$this->load->library('session');
		$this->load->helper(array('url'));
	}
	public function index()
	{
		
		if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
				redirect('Login'); 
		}
		// Mendapatkan data pengaduan per bulan untuk grafik
		$data['Data_perbulan'] = $this->Kartu_Model->getMonthlyKartu();

		$data['Data_pertahun'] = $this->Kartu_Model->getPertahun();
		
		// var_dump($data);
		// $data['tampil'] = $this->Kartu_Model->tampil($nomor)->result();
		
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('dashboard/index', $data);
        $this->load->view('template/footer');
	}
	
}
