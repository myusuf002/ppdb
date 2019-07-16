<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_faq extends CI_Model {

    public function get_all_faq() {
        $this->db->order_by('id_faq', 'DESC');
        return $this->db->get('faq')->result_array();
    }

}