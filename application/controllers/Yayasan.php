<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yayasan extends CI_Controller {

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
		$this->load->view('yayasan', $data);
	}

	public function profil()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_profil', $data);
	}
	
	public function fasilitas()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_fasilitas', $data);
	}

	public function penghargaan()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_penghargaan', $data);
	}

	public function petunjukPendaftaran()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_petunjuk_pendaftaran', $data);
	}

	public function jalurPendaftaran()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_jalur_pendaftaran', $data);
	}

	public function biayaPendidikan()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_biaya_pendidikan', $data);
	}

	public function beasiswa()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_beasiswa', $data);
	}

	public function pendaftaran()
	{
		$data['title'] = "i-PPDB registrasi";
		$this->load->view('yayasan_pendaftaran', $data);
	}

	public function sekolah($jenjang)
	{
		$nama_sekolah = "";
		if ($jenjang == "SMK") $nama_sekolah = "Sekolah Menengah Kejuruan";
		else if ($jenjang == "SMA") $nama_sekolah = "Sekolah Menengah Atas";
		else if ($jenjang == "SMP") $nama_sekolah = "Sekolah Menengah Pertama";
		else if ($jenjang == "SD") $nama_sekolah = "Sekolah Dasar";
		else if ($jenjang == "TK") $nama_sekolah = "Taman Kanak-Kanak";
		else $nama_sekolah = "";
		$data['title'] = "i-PPDB : ".$jenjang;
		$data['kode_sekolah'] = $jenjang;
		$data['nama_sekolah'] = $nama_sekolah;
		$data['status_pendaftaran'] = true;
		$this->load->view('yayasan_sekolah', $data);
	}

	public function pengumuman()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_pengumuman', $data);
	}

	public function faq()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('yayasan_faq', $data);
	}
}
