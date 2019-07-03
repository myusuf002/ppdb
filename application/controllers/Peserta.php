<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta', $data);
  	}
    
  	public function login()
	{
		$data['title'] = "i-PPDB login";
		$this->load->view('peserta_login', $data);
	}

	public function logout()
	{
		redirect("Yayasan");
	}
	
	public function dataDiri()
	{
		$data['title'] = "i-PPDB data diri";
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta_data_diri', $data);
	}
	
	public function dataSekolah()
	{
		$data['title'] = "i-PPDB data diri";
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta_data_sekolah', $data);
	}

	public function berkas()
	{
		$data['title'] = "i-PPDB data diri";
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta_berkas', $data);
	}

	public function daftarUlang()
	{
		$data['title'] = "i-PPDB data diri";
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta_daftar_ulang', $data);
	}

	public function aktivasiAkun()
	{
		$data['title'] = "i-PPDB data diri";
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta_aktivasi_akun', $data);
	}
	
	public function pengaturan()
	{
		$data['title'] = "i-PPDB data diri";
		$data['nama_peserta'] = "Muhammad Yusuf";
		$data['foto_peserta'] = "user-picture-1.png";
		$this->load->view('peserta_pengaturan', $data);
	}
    
}
