<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_jenjang_pendidikan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_jenjang_pendidikan');
    }

    public function index($id_jenjang)
    {
        $data['jenjang'] = $this->m_yayasan_jenjang_pendidikan->get_jenjang_pendidikan($id_jenjang);
        $this->load->view('yayasan/yayasan_jenjang_pendidikan', $data);
    }

    public function pendaftaran()
    {
        $data['asd'] = asd;
        $this->load->view('yayasan/yayasan_pendaftaran', $data);
    }

}
