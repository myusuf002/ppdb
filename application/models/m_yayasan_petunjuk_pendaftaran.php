<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_petunjuk_pendaftaran extends CI_Model {

    public function get_petunjuk_pendaftaran() {
        $this->db->order_by('id_petunjuk_pendaftaran', 'DESC');
        return $this->db->get('petunjuk_pendaftaran')->row_array();
    }

}