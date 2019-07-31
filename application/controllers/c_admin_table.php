<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_table extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin_table');
    }

    public function index($table_name)
    {
        $data['title'] = "";
        $data['table_name'] = $table_name;
        $data['list_column'] = $this->m_admin_table->get_table_columns($table_name);
        $data['list_data'] = $this->m_admin_table->get_all_data($table_name);
        $this->load->view('admin/admin_table', $data);
    }

}
