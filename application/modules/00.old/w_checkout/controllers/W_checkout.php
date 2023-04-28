<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_checkout extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('checkout_model');
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
            $this->load->view('checkout', $x);
            $this->load->view('mode/footer', $f);
    }

    public function indexinv()
	{
            $data2 = $this->home_model->get_perusahaan();
            $data = $this->tentangkami_model->get_data();
            $h['data'] = $data[0];
            $th['data'] = $data[0];
            $f['data'] = $data[0];
            $x['data2'] = $data2[0];

			$this->load->view('mode/head', $h);
            $this->load->view('mode/top-header', $th);
            $this->load->view('invoice', $x);
            $this->load->view('mode/footer', $f);
    }

    public function indexdinvoice()
	{
            $data2 = $this->home_model->get_perusahaan();
            $data = $this->tentangkami_model->get_data();
            $h['data'] = $data[0];
            $th['data'] = $data[0];
            $f['data'] = $data[0];
            $x['data2'] = $data2[0];

			$this->load->view('mode/head', $h);
            $this->load->view('mode/top-header', $th);
            $this->load->view('detail_invoice', $x);
            $this->load->view('mode/footer', $f);
    }

    public function indexcinvoice()
	{
            $data2 = $this->home_model->get_perusahaan();
            $data = $this->tentangkami_model->get_data();
            $h['data'] = $data[0];
            $th['data'] = $data[0];
            $f['data'] = $data[0];
            $x['data2'] = $data2[0];

			// $this->load->view('mode/head', $h);
            // $this->load->view('mode/top-header', $th);
            $this->load->view('cetak_invoice', $x);
            // $this->load->view('mode/footer', $f);
    }

    public function create_transaksi()
	{
        $kode_transaksi = $this->input->post('id_transaksi');
		$data = array(
			'id_user' => $this->input->post('id_user'),
			// 'id_produk' => $this->input->post('id_produk'),
			'id_transaksi' => $this->input->post('id_transaksi'),
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			// 'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'negara' => $this->input->post('negara'),
			'provinsi' => $this->input->post('provinsi'),
			'kabupaten' => $this->input->post('kabupaten'),
			'kecamatan' => $this->input->post('kecamatan'),
			'kelurahan' => $this->input->post('kelurahan'),
			'alamat' => $this->input->post('alamat'),
			'alamat_opsi' => $this->input->post('alamat_opsi'),
			'kodepos' => $this->input->post('kodepos'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'privasi' => $this->input->post('privasi'),
			'tanggal' => date('Y-m-d H:m:i'),
			'status_transaksi' => '1'
        );
        
        $data2 = array(
            'id_user' => $this->input->post('id_user'),
			'id_transaksi' => $this->input->post('id_transaksi'),
			'kode_transaksi' => $this->input->post('kode_transaksi'),
			'status' => '0',
			'tanggal' => date('Y-m-d H:i:s')
        );

        $data3 = array(
			'status' => '1',
        );
        
        $this->checkout_model->input_create('tbl_transaksi', $data);
        $this->checkout_model->input_notif('tbl_notif', $data2);
        $this->checkout_model->update_keranjang('tbl_keranjang', $data3, $kode_transaksi);
        $this->session->set_flashdata('notif_transaksi', '<script>alert("Hai, Terimakasih Sudah Melakukan Pembelian Produk Di SERAGAMPOS, Silahkan lakukan konfirmasi di whatsapps SERAGRAM jika sudah melakukan pembayaran .");window.history.go(-1);</script>');
        redirect('w_checkout/indexinv',$kode_transaksi);
	}

}
