<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta_aktivasi_akun extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta_aktivasi_akun');
    }
    
    public function index()
    {
        $data['title'] = "i-PPDB";
        if (!$this->session->has_userdata('peserta_logged_in')) {
			$this->load->view('peserta/peserta_login', $data);
        }
        $id_peserta = $this->session->userdata('id_peserta');
        $condition = array('id_peserta' => $id_peserta);
        $data_peserta = $this->m_peserta_aktivasi_akun->get_specific_peserta($condition);
        
        $data['peserta'] = $data_peserta;
        $this->load->view('peserta/peserta_aktivasi_akun', $data);
    }

    public function activate()
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $id_peserta = $this->session->userdata('id_peserta');
        $kode_token = $this->input->post('kode_token');
        $conditionToken = array('kode_token' => $kode_token);

        $dataToken = array(
            'tgl_input_token' => date('Y-m-d h:i:s', time()),
            'status_token' => 1
        );
        
        $data_token = $this->m_peserta_aktivasi_akun->get_specific_token($conditionToken);
        if($data_token != null){
            if($data_token['status_token']){
                $data_msg = array(
                    'tipe' => 'error',
                    'msg' => 'Kode token telah terpakai.'
                );
            } else{
                $conditionPeserta = array('id_peserta' => $id_peserta);
                $dataPeserta = array(
                    'status_aktivasi_akun_peserta' => 1
                );
                if($this->m_peserta_aktivasi_akun->update_specific_token($conditionToken, $dataToken) &&    
                   $this->m_peserta_aktivasi_akun->update_specific_peserta($conditionPeserta, $dataPeserta)){
                    $data_msg = array(
                        'tipe' => 'success',
                        'msg' => 'Aktivasi berhasil.'
                    );
                } else{
                    $data_msg = array(
                        'tipe' => 'error',
                        'msg' => 'Aktivasi gagal.'
                    );
                }   
            }

        } else{
            $data_msg = array(
                'tipe' => 'error',
                'msg' => 'Kode token tidak terdaftar.'
            );
        }

        echo json_encode($data_msg);
    }
}
