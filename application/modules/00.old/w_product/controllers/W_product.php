<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_product extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('w_home/home_model');
        $this->load->model('w_tentangkami/tentangkami_model');
        $this->load->model('w_product/product_model');
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
            $this->load->view('product', $x);
            $this->load->view('mode/footer', $f);
    }

    public function keranjang()
	{
		$data = array(
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			'id_user' => $this->input->post('id_user'),
			'id_produk' => $this->input->post('id_produk'),
			'catatan' => $this->input->post('catatan'),
			'jumlah' => $this->input->post('jumlah'),
			'size' => $this->input->post('size'),
			'harga' => $this->input->post('harga'),
			'status' => $this->input->post('status'),
			'date_add' => $this->input->post('date_add')
        );
        

        $this->product_model->input_keranjang('tbl_keranjang', $data);
        $this->session->set_flashdata('notif_keranjang', '<script>alert("Hai, Silahkan lihat detail Keranjang anda, untuk melihat produk yang anda beli.");window.history.go(-1);</script>');
        redirect('w_home/index', $data);
    }
    
    function hapus($id){
        $where = array('id' => $id);
        
        // var_dump($where);exit();
		$this->product_model->hapus_data($where,'tbl_keranjang');
        $this->session->set_flashdata('notif_hapus_keranjang', '<script>alert("Hai, Item anda berhasil di Hapus.");window.history.go(-1);</script>');
		redirect('w_home/index');
	}

}
