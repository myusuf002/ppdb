<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta_aktivasi_akun extends CI_Controller {

    public function index()
    {
        $data['title'] = "i-PPDB";
        $data['login_status'] = true;
        $this->load->view('peserta/peserta_aktivasi_akun', $data);
    }

}
