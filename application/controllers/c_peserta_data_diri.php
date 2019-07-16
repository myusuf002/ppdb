<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta_data_diri extends CI_Controller {

    public function index()
    {
        $data['title'] = "i-PPDB";
        $data['login_status'] = true;
        $data['nama_peserta'] = "Muhammad Yusuf";
        $this->load->view('peserta/peserta_data_diri', $data);
    }

}
