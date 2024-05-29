<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Resep_Obat_Model');
		$this->load->model('Kartu_Model');
        $this->load->library('session');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
                    redirect('Login'); 
                }
                $data['resep_obat'] = $this->Kartu_Model->ResepObat();

                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('resep/index', $data);
                $this->load->view('template/footer');
        
    }
}