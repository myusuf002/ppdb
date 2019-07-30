<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_jenjang_pendidikan extends CI_Model
{

    public function get_jenjang_pendidikan($id_jenjang_pendidikan){
        $this->db->where('id_jenjang_pendidikan', $id_jenjang_pendidikan);
        return $this->db->get('jenjang_pendidikan')->row_array();
    }

    public function add_data_diri($data){
        $this->db->insert('data_diri', $data);
        return $this->db->insert_id();
    }

    public function add_peserta($data){
        $this->db->insert('peserta', $data);
        return $this->db->insert_id();
    }

    public function get_jalur_pendaftaran($condition){
        $this->db->where($condition);
        return $this->db->get('jalur_pendaftaran')->row_array();
    }

    public function cek_email_peserta($email_peserta){
        $this->db->where('email_peserta', $email_peserta);
        $data = $this->db->get('peserta');
        return $data->row_array();
    }
}