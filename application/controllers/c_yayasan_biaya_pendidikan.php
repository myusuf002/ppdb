<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_yayasan_biaya_pendidikan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_yayasan_biaya_pendidikan');
    }

    public function index()
    {
        $jenjang = $this->m_yayasan_biaya_pendidikan->get_all_jenjang_pendidikan();
        $data['list'] = array();
        foreach ($jenjang as $jenjang){
            $jalur_specific = array("id_jenjang_pendidikan" => $jenjang['id_jenjang_pendidikan']);
            array_push($data['list'], array(
                'jenjang' => $jenjang,
                'jalur' => $this->m_yayasan_biaya_pendidikan->get_specific_jalur_jenjang($jalur_specific)
            ));
        }
        $this->load->view('yayasan/yayasan_biaya_pendidikan', $data);
    }

}
