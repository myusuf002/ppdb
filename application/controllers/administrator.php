<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrator extends CI_Controller {

	public function index()
	{
		$data['title'] = "i-PPDB";
		$data['login_status'] = true;
		$this->load->view('admin/administrator', $data);
  	}

    
}
