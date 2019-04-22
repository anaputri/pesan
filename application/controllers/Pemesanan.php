<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pemesanan extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('pemesanan_model');
        $this->load->helper('url');
        $this->load->model('jenis_lapangan_model');
    }
    
    public function index(){
       
        $data['jenis']= $this->jenis_lapangan_model->tampil_data();
        $this->load->view('pemesanan/index', $data);

    }
    

    public function qsimpan(){
        $data = array(
            'nama_tim'=> $this->input->post('nama_tim'),
            'id_lapangan'=>$this->input->post('id_lapangan'),
            'tgl_booking'=>$this->input->post('tgl_booking'),
            'jam_masuk'=>$this->input->post('jam_masuk'),
            'jam_keluar'=>$this->input->post('jam_keluar'),
            'noTelp'=>$this->input->post('noTelp'),
            'tgl_bayar'=>$this->input->post('tgl_bayar'),
            'harga'=>$this->input->post('harga'),


        );
        $this->pemesanan_model->input_data($data);
        $this->load->view('pemesanan/pesan', $data);
    }
    
}