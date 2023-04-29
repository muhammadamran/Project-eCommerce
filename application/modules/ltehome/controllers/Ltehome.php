<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ltehome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ltehome_model');
		$this->load->model('Setting_model');
		$this->load->model('Users_model');
	}
	public function index()
	{
		$dataUsers = $this->Users_model->get_users();
		$x['data'] = $dataUsers;

		$this->load->view('include-lte/head', $x);
		// $this->load->view('include-lte/cssTable', $x);
		$this->load->view('include-lte/top-header', $x);
		$this->load->view('include-lte/sidebar', $x);
		$this->load->view('home', $x);
		$this->load->view('include-lte/activity', $x);
		$this->load->view('include-lte/panel', $x);
		// $this->load->view('include-lte/jsTable', $x);
		$this->load->view('include-lte/footer', $x);
	}
}
