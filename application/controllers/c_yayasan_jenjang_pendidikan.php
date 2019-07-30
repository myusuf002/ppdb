<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_jenjang_pendidikan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_jenjang_pendidikan');
    }

    public function index($id_jenjang)
    {
        $data['jenjang'] = $this->m_yayasan_jenjang_pendidikan->get_jenjang_pendidikan($id_jenjang);
        $this->load->view('yayasan/yayasan_jenjang_pendidikan', $data);
    }

    public function pendaftaran()
    {
        $email_peserta = $this->input->post('email_peserta');
        if ($this->m_yayasan_jenjang_pendidikan->cek_email_peserta($email_peserta) != null){
            $data_msg = array(
                'tipe' => 'error',
                'msg' => 'Email telah terdaftar sebelumnya.'
            );
        }else{
            $data_diri = array(
                'nama_lengkap_data_diri' => $this->input->post('nama_lengkap_data_diri'),
                'nisn_data_diri' => $this->input->post('nisn_data_diri'),
                'tgl_lahir_data_diri' => $this->input->post('tgl_lahir_data_diri'),
                'jenis_kelamin_data_diri' => $this->input->post('jenis_kelamin_data_diri'),
                'alamat_rumah_data_diri' => $this->input->post('alamat_rumah_data_diri'),
                'id_jenjang_pendidikan' => $this->input->post('id_jenjang_pendidikan')
            );
            $jalur_pendaftaran = $this->m_yayasan_jenjang_pendidikan->get_jalur_pendaftaran(array('status_jalur_pendaftaran' => true));
            $id_jalur_pendaftaran = $jalur_pendaftaran['id_jalur_pendaftaran'];
            $id_data_diri = $this->m_yayasan_jenjang_pendidikan->add_data_diri($data_diri);
            $data_peserta = array(
                'id_jalur_pendaftaran' => $id_jalur_pendaftaran,
                'id_data_diri' => $id_data_diri,
                'username_peserta' => $this->input->post('username_peserta'),
                'email_peserta' => $this->input->post('email_peserta'),
                'password_peserta' => md5($this->input->post('password_peserta')),
            );
            $id_peserta = $this->m_yayasan_jenjang_pendidikan->add_peserta($data_peserta);

            $data_session = array(
                'peserta_logged_in' => TRUE,
                'id_peserta' => $id_peserta,
            );
            $this->session->set_userdata($data_session);
            $data_msg = array(
                'tipe' => 'success',
                'msg' => 'Registrasi berhasil.'
            );
        }
        echo json_encode($data_msg);
    }

}
