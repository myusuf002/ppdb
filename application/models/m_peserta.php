<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_peserta extends CI_Model {

    public function get_specific_peserta($condition){
        $this->db->where($condition);
        $data = $this->db->get('peserta');
        return $data->row_array();
    }

    public function get_specific_data_diri($condition){
        $this->db->where($condition);
        $data = $this->db->get('data_diri');
        return $data->row_array();
    }


}