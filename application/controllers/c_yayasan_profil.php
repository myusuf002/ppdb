<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_profil extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_profil');
    }

    public function index()
    {
        $data['yayasan'] = $this->m_yayasan_profil->get_yayasan();
        $this->load->view('yayasan/yayasan_profil', $data);
    }

}
