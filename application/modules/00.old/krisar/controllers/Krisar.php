<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Krisar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('krisar_model');
    }

    public function index(){
        if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
		{
            $x['data'] = $this->krisar_model->krisar();

			$this->load->view("include/head");
            $this->load->view("include/top-header");
            $this->load->view('v_krisar',$x);
            $this->load->view("include/sidebar");
            $this->load->view("include/panel");
            $this->load->view("include/footer");
		}else{
            
			redirect("w_home");
        }
    }
}