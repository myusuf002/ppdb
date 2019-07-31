<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_peserta_aktivasi_akun extends CI_Model {
    
    public function get_specific_peserta($condition){
        $this->db->where($condition);
        $data = $this->db->get('peserta');
        return $data->row_array();
    }
    
    public function update_specific_peserta($condition, $data){
        $this->db->where($condition);        
        $data = $this->db->update('peserta', $data);
        return $this->db->affected_rows();
    }

    public function get_specific_token($condition){
        $this->db->where($condition);
        $data = $this->db->get('token');
        return $data->row_array();
    }

    public function update_specific_token($condition, $data){
        $this->db->where($condition);
        $data = $this->db->update('token', $data);
        return $this->db->affected_rows();
    }


}