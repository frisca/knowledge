<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->model('global_model');
		if($this->session->userdata('logged_in') != 1) {
			redirect(base_url('login/index'));
		}
	}

	public function index()
	{
		$this->load->view('index');
	}
}