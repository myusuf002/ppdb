<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_jalur_pendaftaran extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_jalur_pendaftaran');
    }

    public function index()
    {
        $jalur = $this->m_yayasan_jalur_pendaftaran->get_all_jalur_pendaftaran();
        $data['list'] = array();
        foreach ($jalur as $jalur){
            $jenjang_specific = array("id_jalur_pendaftaran" => $jalur['id_jalur_pendaftaran']);
            $alur_specific = array("id_jalur_pendaftaran" => $jalur['id_jalur_pendaftaran']);
            array_push($data['list'], array(
                'jalur' => $jalur,
                'alur' => $this->m_yayasan_jalur_pendaftaran->get_specific_alur_pendaftaran($alur_specific),
                'jenjang' => $this->m_yayasan_jalur_pendaftaran->get_specific_jalur_jenjang($jenjang_specific)
            ));
        }
        $this->load->view('yayasan/yayasan_jalur_pendaftaran', $data);
    }

}
