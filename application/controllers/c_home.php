<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $data['title'] = "i-PPDB";
        $data['nama_peserta'] = "Muhammad Yusuf";
        $data['foto_peserta'] = "user-picture-1.png";
        $data['yayasan'] = $this->m_home->get_yayasan();
        $data['list_jenjang'] = $this->m_home->get_all_jenjang_pendidikan();
        $data['list_table'] = $this->m_home->get_all_tables();
        $this->load->view('home', $data);
    }

    public function logout()
    {
        $data_session = array('peserta_logged_in', 'id_peserta');
        $this->session->unset_userdata($data_session);
        redirect('c_home');
    }

    public function  admin_logout(){
        $this->session->sess_destroy();
        redirect('c_home');
    }

}
