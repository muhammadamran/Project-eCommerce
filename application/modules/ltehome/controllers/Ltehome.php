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
		if ($this->session->userdata('user_role') == '1') {
			// Setting
			$dataSetting = $this->Setting_model->setting();
			// Text
			// Title
			$x['lte_title'] = $dataSetting[0]->title;
			// Company Name
			$x['lte_companyname'] = $dataSetting[0]->company_name;
			// App Name
			$x['lte_appname'] = $dataSetting[0]->app_name;
			// SEO Desc
			$x['lte_seodesc'] = $dataSetting[0]->seodesc;
			// Tag
			$x['lte_tag'] = $dataSetting[0]->tag;
			// Text Loader
			$x['lte_text_loader'] = $dataSetting[0]->text_loader;
			// Text Footer
			$x['lte_footer'] = $dataSetting[0]->footer;
			// Email HelpDesk
			$x['lte_email'] = $dataSetting[0]->email;
			// Banner Title
			$x['lte_banner_title'] = $dataSetting[0]->banner_title;
			// Banner Paragraph
			$x['lte_banner_paragraph'] = $dataSetting[0]->banner_paragraph;
			// Subscribe Title
			$x['lte_subscribe_title'] = $dataSetting[0]->title_subscribe;
			// Subscribe Paragraph
			$x['lte_subscribe_paragraph'] = $dataSetting[0]->paragraph_subscribe;
			// End Text

			// Pictures
			// Icon
			$x['lte_icon'] = $dataSetting[0]->icon;
			// Logo 1
			$x['lte_logo_1'] = $dataSetting[0]->logo_1;
			// Logo 2
			$x['lte_logo_2'] = $dataSetting[0]->logo_2;
			// Loader
			$x['lte_loader'] = $dataSetting[0]->loader;
			// Banner Images
			$x['lte_banner'] = $dataSetting[0]->banner;
			// Images Cover
			$x['lte_cover'] = $dataSetting[0]->cover;
			// End Pictures
			// End Setting

			// Page
			$x['page'] = 'Dashboard';
			// End Page

			$dataUsers = $this->Users_model->get_users();
			$x['data'] = $dataUsers;

			$this->load->view('include-lte/head', $x);
			$this->load->view('include-web/alert', $x);
			// $this->load->view('include-lte/cssTable', $x);
			$this->load->view('include-lte/top-header', $x);
			$this->load->view('include-lte/sidebar', $x);
			$this->load->view('home', $x);
			$this->load->view('include-lte/activity', $x);
			$this->load->view('include-lte/panel', $x);
			// $this->load->view('include-lte/jsTable', $x);
			$this->load->view('include-lte/footer', $x);
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}
}
