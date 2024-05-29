<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Resep_Obat_Model');
		$this->load->library('session');
		$this->load->helper(array('url'));
	}
	public function index()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('laporan_data/index');
        $this->load->view('template/footer');
	}
	public function print_data() 
	{
			// Ambil data dari formulir
			$tgl_awal = $this->input->get('tgl_awal');
			$tgl_akhir = $this->input->get('tgl_akhir');
			$action = $this->input->get('action');
			
			// Panggil fungsi di model untuk mengambil data
			$data['tbl_resep'] = $this->Resep_Obat_Model->get_data_between_dates($tgl_awal, $tgl_akhir);
			
			// Lakukan aksi berdasarkan pilihan
			if($action == 'print') {
				// Tampilkan data dalam format cetak
				$this->load->view('laporan_data/resep_obat_print', $data);
			} elseif($action == 'download_excel') {
				// Logika untuk mengunduh data ke dalam format Excel
				// Load library PHPExcel
				$this->load->library('PHPExcel');

				// Panggil fungsi di model untuk mengambil data
				$data['tbl_resep'] = $this->Resep_Obat_Model->get_data_between_dates($tgl_awal, $tgl_akhir);
			
				// Buat objek PHPExcel
				$objPHPExcel = new PHPExcel();
			
				// Set properties file Excel
				$objPHPExcel->getProperties()->setCreator("Creator")
											   ->setLastModifiedBy("Creator")
											   ->setTitle("Data Resep Obat")
											   ->setSubject("Data Resep Obat")
											   ->setDescription("Data Resep Obat")
											   ->setKeywords("data, resep obat")
											   ->setCategory("Data");
			
				// Tambahkan data ke sheet Excel
				$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID Resep');
				$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Tanggal Periksa');
				// Lanjutkan dengan menambahkan kolom lain sesuai kebutuhan
			
				$row = 2; // Mulai dari baris kedua
				foreach($data['tbl_resep'] as $resep) {
					$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $resep->id_resep);
					$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $resep->tanggal_periksa);
					// Lanjutkan dengan menambahkan nilai kolom lain sesuai kebutuhan
					$row++;
				}
			
				// Set judul header untuk mengunduh file Excel
				header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				header('Content-Disposition: attachment;filename="data_resep_obat.xlsx"');
				header('Cache-Control: max-age=0');
			
				// Unduh file Excel
				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
				$objWriter->save('php://output');
				exit;
			} else {
				// Tampilkan halaman dengan data yang diambil
				$this->load->view('laporan_data/resep_obat_excel', $data);
			}
		}
    
	
}
