<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_faq extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_faq');
    }

    public function index()
    {
        $data['list_faq'] = $this->m_yayasan_faq->get_all_faq();
        $this->load->view('yayasan/yayasan_faq', $data);
    }

}
