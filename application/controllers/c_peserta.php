<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta');
	}
	
	public function index()
	{
		$data['title'] = "i-PPDB";
		if (!$this->session->has_userdata('peserta_logged_in')) {
			$this->load->view('peserta/peserta_login', $data);
		}
		$id_peserta = $this->session->userdata('id_peserta');
        $condition = array('id_peserta' => $id_peserta);
        $data_peserta = $this->m_peserta->get_specific_peserta($condition);
		$condition = array('id_data_diri' => $data_peserta['id_data_diri']);
		
        $data_diri_peserta = $this->m_peserta->get_specific_data_diri($condition);
		$data['peserta'] = $data_peserta;
		$data['data_diri_peserta'] = $data_diri_peserta;
		$this->load->view('peserta/peserta', $data);
  	}
    
  	public function login()
	{
		$data['title'] = "i-PPDB Login";
		$this->load->view('peserta/peserta_login', $data);
	}

    
}
