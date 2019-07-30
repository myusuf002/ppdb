<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan extends CI_Model {

    public function get_specific_pengumuman($spesific) {
        $this->db->where($spesific);
        $this->db->order_by('tgl_pengumuman', 'DESC');
        return $this->db->get('pengumuman')->result_array();
    }

    public function get_yayasan() {
        $this->db->order_by('id_yayasan', 'DESC');
        return $this->db->get('yayasan')->row_array();
    }

    public function get_all_jenjang_pendidikan() {
        return $this->db->get('jenjang_pendidikan')->result_array();
    }

    public function get_specific_peserta($condition){
        $this->db->where($condition);
        $data = $this->db->get('peserta');
        return $data->row_array();
    }

    public function update_last_login_peserta($id_peserta, $data){
        $this->db->where('id_peserta', $id_peserta);
        $this->db->update('peserta', $data);
    }

}