<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login/login');
	}

	
	public function cekLogin()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $status_akses_input = $this->input->post('status_akses');
	
    $cek = $this->User_Model->cekLogin($username, $password);

    if ($cek) {
        // Periksa apakah status akses yang dipilih cocok dengan status akses pengguna di basis data
        if ($cek->status_akses == $status_akses_input) {
            $data_session = array(
                'nama' => $cek->nama,
                'status_akses' => $cek->status_akses,
                'username' => $cek->username,
                'password' => $cek->password,
                'status' => 'Login'
            );

            $this->session->set_userdata($data_session);

            // Arahkan ke halaman yang sesuai berdasarkan status akses
            if ($cek->status_akses == 'Petugas Klinik') {
                redirect('Dashboard');
            } elseif ($cek->status_akses == 'Dokter') {
                redirect('Data/data_pasien');
            } else {
                // Jika status akses tidak dikenal, arahkan kembali ke halaman login dengan pesan kesalahan
                $this->session->set_flashdata('pesan_error', 'Status akses tidak valid.');
                redirect('Login');
            }
        } else {
            // Jika status akses tidak cocok, arahkan kembali ke halaman login dengan pesan kesalahan
            $this->session->set_flashdata('pesan_error', 'Status akses tidak cocok.');
            redirect('Login');
        }
    } else {
        // Jika kredensial salah, arahkan kembali ke halaman login dengan pesan kesalahan
        $this->session->set_flashdata('pesan_error', 'Username atau password salah.');
        redirect('Login');
    }
}


	public function register()
	{
		$this->load->view('template/header');
		$this->load->view('login/register');
	}

	public function simpanRegister()
    {
        // Pengecekan status login
        $data = [
            
			'nama'  => $this->input->post('nama'),
			'status_akses'  => $this->input->post('status_akses'),
            'username'  => $this->input->post('username'),
            'password' => $this->input->post('password')
            
        ];

        $this->User_Model->simpanRegister($data);

         // Set flashdata untuk pesan alert
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');

        redirect('Login');
    }
	public function logout()
	{
		$this->session->sess_destroy();

		redirect('Login');
	}
}
