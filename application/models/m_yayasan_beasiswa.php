<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_beasiswa extends CI_Model {

    public function get_all_beasiswa() {
        $this->db->order_by('tgl_deadline_beasiswa', 'DESC');
        return $this->db->get('beasiswa')->result_array();
    }

}