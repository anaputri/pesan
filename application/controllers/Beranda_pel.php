<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Beranda_pel extends CI_Controller {
	function __construct(){
        parent::__construct();


        $this->load->helper('url');

    }
	public function index()
	{
		$this->load->view('beranda_pel/index');
	}
}