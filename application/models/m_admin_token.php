<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin_token extends CI_Model {

    public function get_all_jalur_pendaftaran() {
        $this->db->order_by('biaya_pendaftaran_jalur_pendaftaran', 'ASC');
        return $this->db->get('jalur_pendaftaran')->result_array();
    }

    public function insert_batch_token($data){
        $this->db->insert_batch('token', $data);
    }

    public function  get_table_columns($table_name){
        return $this->db
            ->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='SI2nmLzIv6' AND TABLE_NAME='".$table_name."'")
            ->result_array();
    }

    public function get_all_token(){
        return $this->db->get('token')->result_array();
    }
}