<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_fasilitas extends CI_Model {

    public function get_all_fasilitas() {
        $this->db->order_by('id_fasilitas', 'DESC');
        return $this->db->get('fasilitas')->result_array();
    }

}