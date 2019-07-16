<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_yayasan_jenjang_pendidikan extends CI_Model
{

    public function get_jenjang_pendidikan($id_jenjang_pendidikan){
        $this->db->where('id_jenjang_pendidikan', $id_jenjang_pendidikan);
        return $this->db->get('jenjang_pendidikan')->row_array();
    }

}