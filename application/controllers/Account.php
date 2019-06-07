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
		error_reporting(0);
		if ($this->session->userdata['login']) {
			$this->dashboard();
		} else{
			$this->login();
		}
	}

	public function login()
	{
		$operation['status'] = 2;
		if ($this->input->post('loginValidation')) {
			$operation = $this->account_model->loginValidation();
			if ($operation['status']==1) {
				$this->session->set_userdata($operation['session']);
				redirect(base_url('dashboard'));
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

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	public function profile()
	{
		if ($this->input->post('updateAccount')) {
			$this->session->set_userdata($this->account_model->updateAccount());
		}
		$data['content'] = $this->account_model->cProfile();
		$this->load->view('template', $data);
	}

	public function temp()
	{
		$this->load->view('user/template');
	}
}
