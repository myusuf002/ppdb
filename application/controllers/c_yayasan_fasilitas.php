<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_fasilitas extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_fasilitas');
    }

    public function index()
    {
        $data['list_fasilitas'] = $this->m_yayasan_fasilitas->get_all_fasilitas();
        $this->load->view('yayasan/yayasan_fasilitas', $data);
    }

}
