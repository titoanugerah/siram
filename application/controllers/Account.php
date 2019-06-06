<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
	}

	public function index()
	{
		//test purpose
	}

	public function login()
	{
		$operation['status'] = 2;
		if ($this->input->post('loginValidation')) {
			$operation = $this->account_model->loginValidation();
			if ($operation['status']==1) {
				$this->session->set_userdata($operation['session']);
				redirect($this->session->userdata['previlleges'].'Home');
			}
		}
		$data['notification'] = 'login'.$operation['status'];
		$this->load->view('login',$data);
	}

	public function dashboard()
	{
		$data['content'] = $this->account_model->cDashboard();
		$this->load->view('template',$data);
	}


	public function temp()
	{
		$this->load->view('user/template');
	}
}
