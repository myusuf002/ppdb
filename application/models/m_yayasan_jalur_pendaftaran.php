<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_jalur_pendaftaran extends CI_Model {

    public function get_all_jalur_pendaftaran() {
        $this->db->order_by('biaya_pendaftaran_jalur_pendaftaran', 'ASC');
        return $this->db->get('jalur_pendaftaran')->result_array();
    }

    public function get_specific_jalur_jenjang($specific) {
        $this->db->select(
            'jj.id_jenjang_pendidikan, jp.nama_jenjang_pendidikan, jp.kode_jenjang_pendidikan'
        );
        $this->db->from('jalur_jenjang as jj');
        $this->db->join('jenjang_pendidikan as jp', 'jp.id_jenjang_pendidikan = jj.id_jenjang_pendidikan');
        $this->db->where($specific);
        $this->db->order_by('jj.id_jenjang_pendidikan', 'DESC');
        return $this->db->get()->result_array();
    }

    public function get_specific_alur_pendaftaran($specific) {
        $this->db->where($specific);
        $this->db->order_by('tgl_mulai_alur_pendaftaran', 'ASC');
        return $this->db->get('alur_pendaftaran')->result_array();
    }

}