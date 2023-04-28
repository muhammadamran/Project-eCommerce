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

		$this->load->view('include-web/head', $h);
		$this->load->view('include-web/top-header', $th);
		$this->load->view('home', $x);
		$this->load->view('include-web/footer', $f);
	}
}
