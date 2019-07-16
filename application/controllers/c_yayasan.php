<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan');
    }

	public function index()
	{
        $data['list_pengumuman'] = $this->m_yayasan->get_all_pengumuman();
        $data['yayasan'] = $this->m_yayasan->get_yayasan();
		$this->load->view('yayasan/yayasan', $data);
	}

    public function registrasi()
    {
        $data['login_status'] = true;
        $this->load->view('yayasan/yayasan_registrasi', $data);
    }
}
