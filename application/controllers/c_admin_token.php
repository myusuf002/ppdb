<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_token extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin_token');
    }

    public function index()
    {
        $data['title'] = "";
        $data['jalur_pendaftaran'] = $this->m_admin_token->get_all_jalur_pendaftaran();
        $data['list_column'] = $this->m_admin_token->get_table_columns('token');
        $data['list_token'] = $this->m_admin_token->get_all_token();
        $this->load->view('admin/admin_token', $data);
    }

    public function generate(){
        date_default_timezone_set('Asia/Jakarta');
        $data_token = array(
            'id_jalur_pendaftaran' => $this->input->post('id_jalur_pendaftaran'),
            'n_token' => $this->input->post('n_token')
        );
        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $data_batch = array();
        while (count($data_batch) != $data_token['n_token']){
            $kode_token =  substr(str_shuffle($permitted_chars), 0, 10);
            array_push(
                $data_batch,
                array(
                    'id_jalur_pendaftaran' => $data_token['id_jalur_pendaftaran'],
                    'kode_token' => $kode_token,
                    'tgl_generate_token' => date('Y-m-d h:i:s', time())
                )
            );
        }
        $this->m_admin_token->insert_batch_token($data_batch);
        $data_msg = array(
            'tipe' => 'success',
            'msg' => 'Berhasil generate ' . $data_token['n_token'] . ' token'
        );
        echo json_encode($data_msg);
    }

}
