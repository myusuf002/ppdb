<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller {

    public function index()
    {
        $data['title'] = "i-PPDB";
        $data['login_status'] = true;
        $data['nama_peserta'] = "Muhammad Yusuf";
        $data['foto_peserta'] = "user-picture-1.png";
        $this->load->view('home', $data);
    }

}
