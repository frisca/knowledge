<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->model('global_model');
		if($this->session->userdata('logged_in') != 1) {
			redirect(base_url('login/index'));
		}
	}

	public function index()
	{
		$data['user'] = $this->global_model->getDataAll('user')->result_array();
		$this->load->view('user/index', $data);
	}


	public function add(){
		$this->load->view('user/add');
	}
}