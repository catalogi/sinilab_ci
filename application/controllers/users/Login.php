<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Login');
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->input->post()) {
			if ($this->Model_Login->doLogin()) redirect(site_url('Dashboard'));
		}
		$data = [
			'title' => 'Login'
		];

		// $data = $this->load->view('user/header',$data);
		$this->load->view('user/viewLogin', $data);
		// $data = $this->load->view('user/footer');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
