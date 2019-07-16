<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta extends CI_Controller {

	public function index()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('peserta/peserta', $data);
  	}
    
  	public function login()
	{
		$data['title'] = "i-PPDB Login";
		$this->load->view('peserta/peserta_login', $data);
	}

	public function logout()
	{
		redirect("/");
	}
    
}
