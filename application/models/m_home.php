<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_home extends CI_Model {

    public function get_yayasan() {
        $this->db->order_by('id_yayasan', 'DESC');
        return $this->db->get('yayasan')->row_array();
    }

    public function get_all_jenjang_pendidikan() {
        return $this->db->get('jenjang_pendidikan')->result_array();
    }

    public function get_all_tables(){
        return $this->db
            ->query("SELECT table_name FROM information_schema.tables where table_schema='SI2nmLzIv6'")
            ->result_array();
    }

}