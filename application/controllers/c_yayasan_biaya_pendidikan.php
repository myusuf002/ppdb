<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_biaya_pendidikan extends CI_Controller {

    public function index()
    {
        $data['title'] = "i-PPDB";
        $data['login_status'] = true;
        $this->load->view('yayasan/yayasan_biaya_pendidikan', $data);
    }

}