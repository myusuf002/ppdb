<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

	public function index()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('admin/admin', $data);
  	}
    
  	public function login()
	{
		$data['title'] = "i-PPDB Login";
		$this->load->view('admin/admin_login', $data);
	}

	public function logout()
	{
		redirect("/");
	}
    
}
