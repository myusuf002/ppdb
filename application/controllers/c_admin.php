<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

	public function index()
	{
		$data['title'] = "";
		$this->load->view('admin/admin', $data);
  	}

  	public function login_page(){
        $data['title'] = "";
        $this->load->view('admin/admin_login', $data);
    }

    public function login()
    {
        $data = array(
            'username_admin' => $this->input->post('username_admin'),
            'password_admin' => $this->input->post('password_admin')
        );
        $condition = array('username_admin' => $data['username_admin']);
        $data_admin = $this->m_admin->get_specific_admin($condition);
        if ($data_admin == null){
            $data_msg = array(
                'tipe' => 'error',
                'msg' => 'Anda belum terdaftar.'
            );
        }else{
            if (md5($data['password_admin']) == $data_admin['password_admin']){
                $data_session = array(
                    'admin_logged_in' => TRUE,
                    'id_admin' => $data_admin['id_admin'],
                );
                $this->session->set_userdata($data_session);
                $data_msg = array(
                    'tipe' => 'success',
                    'msg' => 'Login berhasil.'
                );
                date_default_timezone_set('Asia/Jakarta');
                $data = array('last_login_admin' => date('Y-m-d h:i:s', time()));
                $this->m_admin->update_last_login_admin($data_admin['id_admin'], $data);
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
