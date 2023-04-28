<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_love extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('w_home/home_model');
        $this->load->model('w_tentangkami/tentangkami_model');
    }

    public function index()
	{
            $data2 = $this->home_model->get_perusahaan();
            $data = $this->tentangkami_model->get_data();
            $h['data'] = $data[0];
            $th['data'] = $data[0];
            $f['data'] = $data[0];
            $x['data2'] = $data2[0];

			$this->load->view('mode/head', $h);
            $this->load->view('mode/top-header', $th);
            $this->load->view('love', $x);
            $this->load->view('mode/footer', $f);
    }

}
