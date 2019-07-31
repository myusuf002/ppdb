<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin_table extends CI_Model {

    public function get_table_columns($table_name){
        return $this->db
            ->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='SI2nmLzIv6' AND TABLE_NAME='".$table_name."'")
            ->result_array();
    }

    public function get_all_tables(){
        return $this->db
            ->query("SELECT table_name FROM information_schema.tables where table_schema='SI2nmLzIv6'")
            ->result_array();
    }

    public function get_all_data($table_name) {
        return $this->db->get($table_name)->result_array();
    }

}