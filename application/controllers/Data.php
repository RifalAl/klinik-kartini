<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kartu_Model');
		$this->load->model('Ttd_Model');
		$this->load->model('Pagination_Model');
		$this->load->model('Resep_Obat_Model');
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
{
    if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
        redirect('Login'); 
    }
	$keyword = $this->input->get('keyword', TRUE); // Get the search keyword

	if ($keyword) {
		$data['resep_obat'] = $this->Kartu_Model->searchResepObat($keyword);
		$data['jumlah_resep'] = count($data['resep_obat']);
	} else {
		$data['resep_obat'] = $this->Kartu_Model->jumlahKartu();
		$data['jumlah_resep'] = count($data['resep_obat']);
	}
	$this->load->view('template/header');
	$this->load->view('template/navbar');
	$this->load->view('data/index', $data);
	$this->load->view('data/form_data');
	$this->load->view('template/footer');
    
}


	public function tambahData()
	{
		$data = [
			'no_kartu'       => $this->input->post('no_kartu'),
            // 'no_rm'         => $this->input->post('no_rm'),
			// 'tanggal_periksa' => $this->input->post('tanggal_periksa'),
            'nama'          => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'umur'          => $this->input->post('umur'),
			'alamat'        => $this->input->post('alamat'),
			'no_hp'         => $this->input->post('no_hp')
        ];
            // Menyimpan data pasien ke model wittt
            $this->Kartu_Model->simpan_data($data);

            redirect('Data');
        }

		// proses edit kartu witttt
		public function editData()
		{
			$nomor = $this->input->post('nomor');
			$no_kartu = $this->input->post('no_kartu');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$umur = $this->input->post('umur');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$status = $this->input->post('status');

			// tampung data
			$data = [
				'no_kartu' => $no_kartu,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'umur' => $umur,
				'alamat' => $alamat,
				'no_hp' => $no_hp,
				'status' => $status
			];
			// kirim data dari ke model
			$this->Kartu_Model->editKartu($data, $nomor);

			$this->session->set_flashdata('update', 'Data berhasil diupdate');

			redirect('Data_Pasien/index/' . $nomor);
		}

		public function hapusKartu($nomor)
		{
			
				
			// Hapus resep dari database
			$this->Kartu_Model->hapus($nomor);
		
			// Set flash message
			$this->session->set_flashdata('delete', 'Data berhasil dihapus');
		
			// Redirect ke halaman data pasien
			redirect('Data');
		}

		public function data_pasien() {

			if (!$this->session->userdata('status') || $this->session->userdata('status') != 'Login') {
				redirect('Login'); 
			}

			$keyword = $this->input->get('keyword', TRUE); // Get the search keyword

			if ($keyword) {
			$data['resep_obat'] = $this->Kartu_Model->searchResepObat($keyword);
			$data['jumlah_resep'] = count($data['resep_obat']);
			} else {
			$data['resep_obat'] = $this->Kartu_Model->jumlahKartu();
			$data['jumlah_resep'] = count($data['resep_obat']);
			}

			$data['ttd'] = $this->Ttd_Model->ttd()->result();


			$this->load->view('template/header');
			$this->load->view('template/navbar_dokter');
			$this->load->view('data/data_dokter', $data);
			$this->load->view('ttd/index');
			$this->load->view('template/footer');
				}

	
	}
