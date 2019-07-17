<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_petunjuk_pendaftaran extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_petunjuk_pendaftaran');
    }

    public function index()
    {
        $data['petunjuk_pendaftaran'] = $this->m_yayasan_petunjuk_pendaftaran->get_petunjuk_pendaftaran();
        $this->load->view('yayasan/yayasan_petunjuk_pendaftaran', $data);
    }

}
