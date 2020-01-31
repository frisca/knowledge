<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->model('global_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function processLogin(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$c_res = $this->global_model->getDataByCondition('user', $data)->num_rows();
		if($c_res > 0){
			$res = $this->global_model->getDataByCondition('user', $data)->row();
			$data_session = array(
				'username'  => $res->username,
				'logged_in' => 1,
				'role'		=> (int)$res->role
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('home'));
		}
		redirect(base_url('login/index'));
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}