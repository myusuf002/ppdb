<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

    public function get_specific_admin($condition){
        $this->db->where($condition);
        $data = $this->db->get('admin');
        return $data->row_array();
    }

    public function update_last_login_admin($id_admin, $data){
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
    }
}