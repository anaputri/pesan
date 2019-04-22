<?php

class cari_model extends CI_Model{
    
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

}