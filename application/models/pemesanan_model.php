<?php

class pemesanan_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'sewa_lapangan';

        parent::__construct();
    }
    function tampil_data($number,$offset){
        $this->db->select('sewa_lapangan.id, nama_tim, jns_lapangan, tgl_booking,jam_masuk, jam_keluar, noTelp, tgl_bayar, harga');
        $this->db->join('jenis_lapangan', 'jenis_lapangan.id = sewa_lapangan.id_lapangan');
        $query =$this->db->get($this->table,$number,$offset);

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
    function update_data($data, $id_sewa){
        $this->db->where('id', $id_sewa);
        $this->db->update($this->table, $data);
    }
    
}