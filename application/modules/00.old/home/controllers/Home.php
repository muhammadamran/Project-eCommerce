<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('home_model');
  }

  /**
     * This function is used to load page view
     * @return Void
     */
  public function index()
  {
    if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
    {
      $x['member'] = $this->home_model->member();
      $x['produk'] = $this->home_model->produk();
      $x['pesanan'] = $this->home_model->pesanan();
      $x['krisar'] = $this->home_model->krisar();

      $this->load->view("include/head");
      $this->load->view("include/top-header");
      $this->load->view('home', $x);
      $this->load->view("include/sidebar");
      $this->load->view("include/panel");
      $this->load->view("include/footer");         

    }else{
        //jika session belum terdaftar, maka redirect ke halaman login
        redirect("w_home");
    }
	
  }
}
?>
