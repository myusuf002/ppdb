<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_peserta_data_diri extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_peserta_data_diri');
    }
    
    public function index()
    {
        $data['title'] = "i-PPDB";
        if (!$this->session->has_userdata('peserta_logged_in')) {
			$this->load->view('peserta/peserta_login', $data);
        }
        
        $id_peserta = $this->session->userdata('id_peserta');
        $condition = array('id_peserta' => $id_peserta);
        $data_peserta = $this->m_peserta_data_diri->get_specific_peserta($condition);
        $condition = array('id_data_diri' => $data_peserta['id_data_diri']);
        $data_diri_peserta = $this->m_peserta_data_diri->get_specific_data_diri($condition);

        $data['data_diri_peserta'] = $data_diri_peserta;
        $this->load->view('peserta/peserta_data_diri', $data);
    }

    public function update()
    {
        
        $id_data_diri = $this->input->post('id_data_diri');
		$data = array(
			'nik_data_diri' => $this->input->post('nik_data_diri'),
			'tempat_lahir_data_diri' => $this->input->post('tempat_lahir_data_diri'),
			'alamat_rumah_data_diri' => $this->input->post('alamat_rumah_data_diri')
        );
        $condition = array('id_data_diri' => $id_data_diri);
		if($this->m_peserta_data_diri->update_data_diri($condition, $data) > 0){
            $data_msg = array(
                'tipe' => 'success',
                'msg' => 'Berhasil menyimpan.'
            );
        } else{
            $data_msg = array(
                'tipe' => 'error',
                'msg' => 'Gagal menyimpan.'
            );
        }

        echo json_encode($data_msg);
    }

}
