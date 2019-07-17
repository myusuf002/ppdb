<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_biaya_pendidikan extends CI_Model {

    public function get_all_jenjang_pendidikan() {
        $this->db->order_by('id_jenjang_pendidikan', 'ASC');
        return $this->db->get('jenjang_pendidikan')->result_array();
    }

    public function get_specific_jalur_jenjang($specific) {
        $this->db->select(
            'jj.id_jenjang_pendidikan, jp.nama_jalur_pendaftaran, jp.biaya_pendaftaran_jalur_pendaftaran, jp.biaya_pendidikan_jalur_pendaftaran, jp.biaya_pembangunan_jalur_pendaftaran'
        );
        $this->db->from('jalur_jenjang as jj');
        $this->db->join('jalur_pendaftaran as jp', 'jp.id_jalur_pendaftaran = jj.id_jalur_pendaftaran');
        $this->db->where($specific);
        $this->db->order_by('jp.biaya_pendaftaran_jalur_pendaftaran', 'ASC');
        return $this->db->get()->result_array();
    }

}