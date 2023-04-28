<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class W_shop extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('w_home/home_model');
        $this->load->model('w_tentangkami/tentangkami_model');
    }

    public function index()
	{
		
	}

	public function kemeja()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('kemeja/kemeja', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function kemeja_pos()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('kemeja/kemeja_pos', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function kemeja_bumn()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('kemeja/kemeja_bumn', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function kemeja_kantor()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('kemeja/kemeja_kantor', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function kaos()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('kaos/kaos', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function jaket()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('jaket/jaket', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function jaket_pos()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('jaket/jaket_pos', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function jaket_bumn()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('jaket/jaket_bumn', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function jaket_olahraga()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('jaket/jaket_olahraga', $x);
		$this->load->view('mode/footer', $f);
    }
	
	public function jaket_gunung()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('jaket/jaket_gunung', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function polo()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('polo/polo', $x);
		$this->load->view('mode/footer', $f);
	}

	public function polo_pos()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('polo/polo_pos', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function polo_bumn()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('polo/polo_bumn', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function polo_pgm()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('polo/polo_pgm', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function celana()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('celana/celana', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function celana_jeans()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('celana/celana_jeans', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function celana_chino()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('celana/celana_chino', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function celana_olahraga()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('celana/celana_olahraga', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function topi()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('topi/topi', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function topi_pos()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('topi/topi_pos', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function topi_bumn()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('topi/topi_bumn', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function topi_pgm()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('topi/topi_pgm', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function souve()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('souve/souve', $x);
		$this->load->view('mode/footer', $f);
	}

	public function souve_tag()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('souve/souve_tag', $x);
		$this->load->view('mode/footer', $f);
	}
	
	public function souve_card()
	{
		$data2 = $this->home_model->get_perusahaan();
		$data = $this->tentangkami_model->get_data();
		$h['data'] = $data[0];
		$th['data'] = $data[0];
		$f['data'] = $data[0];
		$x['data2'] = $data2[0];

		$this->load->view('mode/head', $h);
		$this->load->view('mode/top-header', $th);
		$this->load->view('souve/souve_card', $x);
		$this->load->view('mode/footer', $f);
    }
}
?>