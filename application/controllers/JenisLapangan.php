<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisLapangan extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
            redirect(base_url("data_admin"));
        }

		$this->load->model('jenis_lapangan_model');

		$this->load->helper('url');

	}

	
	public function index()
	{
		// $this->load->view('welcome_message');

		$jumlah_data = $this->jenis_lapangan_model->jumlah_data();
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().'JenisLapangan/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;

        // class pagination bootstrap 4 
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Selanjutnya';
		$config['prev_link']        = 'Sebelumnya';
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
        $data['data'] = $this->jenis_lapangan_model->tampil_data($config['per_page'], $from);
        $data['no']= $from;
        $this->load->view('jenis/index', $data);

	}


	public function tambah(){
		$this->load->view('jenis/tambah');
	}


	public function simpan(){
		$data = array(
			'jns_lapangan' => $this->input->post('jns_lapangan'),
			'harga_perjam' => $this->input->post('harga_perjam'),
			
		);
		$this->jenis_lapangan_model->input_data($data);
		redirect('JenisLapangan');
	}

	public function edit($id){
		$data['data']=$this->jenis_lapangan_model->spesifik_data($id);

		$this->load->view('jenis/edit',$data);
	}


	public function update(){
			$id_lapangan = $this->input->post('id');
			// die($this->input->post('nama'));
			$data = array
			(
				'jns_lapangan' => $this->input->post('jns_lapangan'),
				'harga_perjam' => $this->input->post('harga_perjam'),
				
			);
			$this->jenis_lapangan_model->update_data($data, $id_lapangan);
			redirect('JenisLapangan');
		}	


		public function hapus($id){
			$this->jenis_lapangan_model->hapus_data($id);
			redirect('JenisLapangan');
		
		}

	
	}


