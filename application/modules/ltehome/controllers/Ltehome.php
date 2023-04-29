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

		// Setting
		$dataCompany = $this->Setting_model->setting();
		if ($dataCompany == NULL) {
			// Icon
			$x['lte_icon'] = 'icon.svg';
			// Title
			$x['lte_title'] = 'Website Title';
			// Company Name
			$x['lte_companyname'] = 'Company Name';
			// App Name
			$x['lte_appname'] = 'App Name';
			// Logo 1
			$x['lte_logo_1'] = 'logo.png';
			// Logo 2
			$x['lte_logo_2'] = 'logo.png';
			// Loader
			$x['lte_loader'] = 'loader.svg';
			// Text Loader
			$x['lte_text_loader'] = 'Please Wait...';
			// Text Footer
			$x['lte_footer'] = 'Powered Hellos-ID';
			// Email HelpDesk
			$x['lte_email'] = '#';
			// Banner Images
			$x['lte_banner'] = 'ecommerce.jpg';
			// Banner Title
			$x['lte_banner_title'] = 'Hellos ID eCommerce';
			// Banner Paragraph
			$x['lte_banner_paragraph'] = 'Enterprise device sales system';
			// Subscribe Title
			$x['lte_subscribe_title'] = 'STAY WITH US';
			// Subscribe Paragraph
			$x['lte_subscribe_paragraph'] = 'Subscribe to our newsletter now and stay up to date with new collections, latest lookbooks and exclusive offers.';
			// Images Cover
			$x['lte_cover'] = 'hellos.svg';
		} else {
		}
		// End Setting

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
