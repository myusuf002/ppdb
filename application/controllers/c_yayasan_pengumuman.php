<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_pengumuman extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_pengumuman');
    }

    public function index()
    {
        $data['list_pengumuman'] = $this->m_yayasan_pengumuman->get_all_pengumuman();
        $this->load->view('yayasan/yayasan_pengumuman', $data);
    }

}
