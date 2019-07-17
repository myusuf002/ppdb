<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_pengumuman extends CI_Model {

    public function get_all_pengumuman() {
        $this->db->order_by('tgl_pengumuman', 'DESC');
        return $this->db->get('pengumuman')->result_array();
    }

    public function get_specific_pengumuman($specific) {
        $this->db->where($specific);
        $this->db->order_by('tgl_pengumuman', 'DESC');
        return $this->db->get('pengumuman')->result_array();
    }

}