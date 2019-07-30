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
	    $spesific = array('status_pengumuman' => true);
        $data['list_pengumuman'] = $this->m_yayasan->get_specific_pengumuman($spesific);
        $data['yayasan'] = $this->m_yayasan->get_yayasan();
        $data['list_jenjang'] = $this->m_yayasan->get_all_jenjang_pendidikan();
		$this->load->view('yayasan/yayasan', $data);
	}

    public function registrasi()
    {
        $data['list_jenjang'] = $this->m_yayasan->get_all_jenjang_pendidikan();
        $this->load->view('yayasan/yayasan_registrasi', $data);
    }

    public function login()
    {
        $data = array(
            'username_peserta' => $this->input->post('username_peserta'),
            'password_peserta' => $this->input->post('password_peserta')
        );
        $condition = array('username_peserta' => $data['username_peserta']);
        $data_peserta = $this->m_yayasan->get_specific_peserta($condition);
        if ($data_peserta == null){
            $data_msg = array(
                'tipe' => 'error',
                'msg' => 'Anda belum terdaftar.'
            );
        }else{
            if (md5($data['password_peserta']) == $data_peserta['password_peserta']){
                $data_session = array(
                    'peserta_logged_in' => TRUE,
                    'id_peserta' => $data_peserta['id_peserta'],
                );
                $this->session->set_userdata($data_session);
                $data_msg = array(
                    'tipe' => 'success',
                    'msg' => 'Login berhasil.'
                );
            }else{
                $data_msg = array(
                    'tipe' => 'error',
                    'msg' => 'Password salah.'
                );
            }
        }
        echo json_encode($data_msg);
    }
}
