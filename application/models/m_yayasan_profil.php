<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_profil extends CI_Model {

    public function get_yayasan() {
        $this->db->order_by('id_yayasan', 'DESC');
        return $this->db->get('yayasan')->row_array();
    }

}