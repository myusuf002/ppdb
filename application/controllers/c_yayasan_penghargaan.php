<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_penghargaan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_penghargaan');
    }

    public function index()
    {
        $data['list_penghargaan'] = $this->m_yayasan_penghargaan->get_all_penghargaan();
        $this->load->view('yayasan/yayasan_penghargaan', $data);
    }

}
