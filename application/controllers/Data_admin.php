<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Data_admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    
        $this->load->model('data_admin_model');
        $this->load->helper('url');
        $this->load->model('jenis_lapangan_model');
    }
    
    public function index(){
        $jumlah_data=$this->data_admin_model->jumlah_data();

        $this->load->library('pagination');
        $config['base_url']=base_url().'data_admin/index/';
        $config['total_rows']=$jumlah_data;
        $config['per_page']=5;

        // class pagination bootstrap 4 
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'next';
		$config['prev_link']        = 'Previous';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-left">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

       
        $from = $this->uri->segment(3);

        $this->pagination->initialize($config);
        $data['data'] = $this->data_admin_model->tampil_data($config['per_page'], $from);
        $data['no']= $from;
        $this->load->view('data_admin/index', $data);

    }
    public function tambah(){
        $data['jenis']= $this->jenis_lapangan_model->tampil_data();
		$this->load->view('data_admin/tambah', $data);
	}

    public function simpan1(){
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
        $this->data_admin_model->input_data($data);
        redirect('data_admin');
    }

    public function edit($id){
        $data['jenis']= $this->jenis_lapangan_model->tampil_data();
        $data['data']= $this->data_admin_model->spesifik_data($id);
        $this->load->view('data_admin/edit',$data);
    }

    public function update(){
        $id_sewa =$this->input->post('id');
        $data=array(
            'nama_tim'=> $this->input->post('nama_tim'),
            'id_lapangan'=>$this->input->post('id_lapangan'),
            'tgl_booking'=>$this->input->post('tgl_booking'),
            'jam_masuk'=>$this->input->post('jam_masuk'),
            'jam_keluar'=>$this->input->post('jam_keluar'),
            'noTelp'=>$this->input->post('noTelp'),
            'tgl_bayar'=>$this->input->post('tgl_bayar'),
            'harga'=>$this->input->post('harga'),
       
        );
        $this->data_admin_model->update_data($data, $id_sewa);
        redirect('data_admin');
    }
    function hapus($id){
        $this->data_admin_model->hapus_data($id);
        redirect('data_admin');
    }
   
    
}
