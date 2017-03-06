<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper(array('url', 'form'));
	}

	public function index()
	{

		$this->load->view('chat_dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
