<?php

class jenis_lapangan_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'jenis_lapangan';

        parent::__construct();
    }
    function tampil_data($number = NULL, $offset = NULL){

        $query =$this->db->get($this->table, $number, $offset);

        return $query->result();
    }
    function jumlah_data(){
        $query = $this->db->get($this->table);

        return $query->num_rows();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
    function spesifik_data($id){
        $query = $this->db->get_where($this->table,array('id'=> $id));
        return $query->row();
    }
    function update_data($data, $id_lapangan){
        $this->db->where('id', $id_lapangan);
        $this->db->update($this->table, $data);
    }
    function hapus_data($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
}