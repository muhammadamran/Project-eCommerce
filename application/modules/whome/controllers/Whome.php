<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Whome_model');
		$this->load->model('Setting_model');
		$this->load->model('Users_model');
	}
	public function index()
	{

		// IMAGES BACKGROUND
		$x['BackgroundItem'] = 'assets/website/product/cover/bg-blue.svg';
		// END IMAGES BACKGROUND

		$dataUsers = $this->Users_model->get_users();
		$x['data'] = $dataUsers;

		$this->load->view('include-web/head', $x);
		$this->load->view('include-web/top-header', $x);
		$this->load->view('home', $x);
		$this->load->view('include-web/footer', $x);
		$this->load->view('include-web/login', $x);
		$this->load->view('include-web/create', $x);
		$this->load->view('include-web/notify', $x);
	}
}
