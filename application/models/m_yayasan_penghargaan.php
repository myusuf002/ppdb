<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_penghargaan extends CI_Model {

    public function get_all_penghargaan() {
        $this->db->order_by('id_penghargaan', 'DESC');
        return $this->db->get('penghargaan')->result_array();
    }

}