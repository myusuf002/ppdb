<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_beasiswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_beasiswa');
    }

    public function index()
    {
        $data['list_beasiswa'] = $this->m_yayasan_beasiswa->get_all_beasiswa();
        $this->load->view('yayasan/yayasan_beasiswa', $data);
    }

}
