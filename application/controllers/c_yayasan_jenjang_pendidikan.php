<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_jenjang_pendidikan extends CI_Controller {

    public function index($jenjang)
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
        $this->load->view('yayasan/yayasan_jenjang_pendidikan', $data);
    }

    public function pendaftaran()
    {
        $data['title'] = "i-PPDB Registrasi";
        $this->load->view('yayasan/yayasan_pendaftaran', $data);
    }

}
