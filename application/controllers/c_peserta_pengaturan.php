<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta_pengaturan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta_pengaturan');
	}
    public function index()
    {
        $data['title'] = "i-PPDB";
        if (!$this->session->has_userdata('peserta_logged_in')) {
			$this->load->view('peserta/peserta_login', $data);
        }
        $id_peserta = $this->session->userdata('id_peserta');
        $condition = array('id_peserta' => $id_peserta);
        $data_peserta = $this->m_peserta_pengaturan->get_specific_peserta($condition);
        $condition = array('id_data_diri' => $data_peserta['id_data_diri']);
        $data_diri_peserta = $this->m_peserta_pengaturan->get_specific_data_diri($condition);
        
        $data['peserta'] = $data_peserta;
        $data['data_diri_peserta'] = $data_diri_peserta;
        $this->load->view('peserta/peserta_pengaturan', $data);
    }

    public function update()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $conditionPeserta = array('id_peserta' => $id_peserta);
        $dataPeserta = array('email_peserta' => $this->input->post('email_peserta'));

        if($this->input->post('password_peserta') != ""){
            $dataPeserta['password_peserta'] = md5($this->input->post('password_peserta'));
        }
        
        $id_data_diri = $this->input->post('id_data_diri');
        $conditionDataDiri = array('id_data_diri' => $id_data_diri);
        $dataDiri = array('no_hp_data_diri' => $this->input->post('no_hp_data_diri'));

        if($this->m_peserta_pengaturan->update_peserta($conditionPeserta, $dataPeserta) +
            $this->m_peserta_pengaturan->update_data_diri($conditionDataDiri, $dataDiri) > 0){
            $data_msg = array(
                'tipe' => 'success',
                'msg' => 'Berhasil menyimpan.'
            );
        } else{
            $data_msg = array(
                'tipe' => 'error',
                'msg' => 'Gagal menyimpan .'
            );
        }
        
        echo json_encode($data_msg);
    }
}
