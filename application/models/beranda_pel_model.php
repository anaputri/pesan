<?php
//ria
class data_admin_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'sewa_lapangan';
        parent::__construct();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
}