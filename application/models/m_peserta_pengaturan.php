<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_peserta_pengaturan extends CI_Model {

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

    public function update_peserta($condition, $data){
        $this->db->where($condition);
        $data = $this->db->update('peserta', $data);
        return $this->db->affected_rows();
    }

    public function update_data_diri($condition, $data){
        $this->db->where($condition);
        $data = $this->db->update('data_diri', $data);
        return $this->db->affected_rows();
    }

}