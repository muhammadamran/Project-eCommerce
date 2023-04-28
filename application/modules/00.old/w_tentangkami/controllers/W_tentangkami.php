<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class W_tentangkami extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentangkami_model');
    }

    public function index()
	{
            $data = $this->tentangkami_model->get_data();
            $x['data'] = $data[0];
            $h['data'] = $data[0];
            $th['data'] = $data[0];
            $f['data'] = $data[0];

			$this->load->view('mode/head', $h);
            $this->load->view('mode/top-header', $th);
            $this->load->view('tentangkami', $x);
            $this->load->view('mode/footer', $f);
    }

    public function create()
	{
		$data = array(
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'pesan' => $this->input->post('pesan'),
			'created_at' => $this->input->post('created_at')
		);
        
        $this->tentangkami_model->input_create('tbl_kritiksaran', $data);
        $this->session->set_flashdata('notif_kritiksaran', '<script>alert("Hai, Terimakasih Sudah Memberikan Kritik & Saran Anda, Kami akan berusaha untuk menjadi lebih baik.");window.history.go(-1);</script>');
        redirect('w_tentangkami/index');
	}
 
}
?>