<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Whome_model');
		$this->load->model('Setting_model');
		$this->load->model('Users_model');
	}

	public function index()
	{
		// Setting
		$dataCompany = $this->Setting_model->setting();
		if ($dataCompany == NULL) {
			// Icon
			$x['web_icon'] = 'icon.svg';
			// Title
			$x['web_title'] = 'Website Title';
			// Company Name
			$x['web_companyname'] = 'Company Name';
			// App Name
			$x['lte_appname'] = 'App Name';
			// Logo 1
			$x['web_logo_1'] = 'logo.png';
			// Logo 2
			$x['web_logo_2'] = 'logo.png';
			// Loader
			$x['web_loader'] = 'loader.svg';
			// Text Loader
			$x['web_text_loader'] = 'Please Wait...';
			// Text Footer
			$x['web_footer'] = 'Powered Hellos-ID';
			// Email HelpDesk
			$x['web_email'] = '#';
			// Banner Images
			$x['web_banner'] = 'ecommerce.jpg';
			// Banner Title
			$x['web_banner_title'] = 'Hellos ID eCommerce';
			// Banner Paragraph
			$x['web_banner_paragraph'] = 'Enterprise device sales system';
			// Subscribe Title
			$x['web_subscribe_title'] = 'STAY WITH US';
			// Subscribe Paragraph
			$x['web_subscribe_paragraph'] = 'Subscribe to our newsletter now and stay up to date with new collections, latest lookbooks and exclusive offers.';
			// Images Cover
			$x['web_cover'] = 'hellos.svg';
		} else {
		}
		// End Setting

		$dataUsers = $this->Users_model->get_users();
		$x['data'] = $dataUsers;

		$this->load->view('include-web/head', $x);
		$this->load->view('include-web/alert', $x);
		$this->load->view('include-web/top-header', $x);
		$this->load->view('home', $x);
		$this->load->view('include-web/footer', $x);
		$this->load->view('include-web/login', $x);
		$this->load->view('include-web/create', $x);
		$this->load->view('include-web/notify', $x);
	}

	public function action_login()
	{
		if (isset($_POST['submit'])) {
			$user_mail = $this->input->post('user_mail');
			$user_pass = $this->input->post('user_pass');

			$data = array(
				'user_mail' => $user_mail,
				'user_pass' => $user_pass
			);

			$check = $this->Users_model->check_login('tb_book_user', $data);

			if (@$check) {

				$data_session = array(
					'id' => $check->id,
					'user_name' => $check->user_name,
					'user_pass' => $check->user_pass,
					'user_role' => $check->user_role,
					'user_dept' => $check->user_dept,
					'user_mail' => $check->user_mail,
					'user_nik' => $check->user_nik,
					'user_full_name' => $check->user_full_name,
					'user_cc' => $check->user_cc,
					'user_code' => $check->user_code,
					'user_in' => $check->user_in,
					'user_sex' => $check->user_sex,
					'user_last_quota' => $check->user_last_quota,
					'remark_1' => $check->remark_1,
					'user_quota' => $check->user_quota,
					'remark_2' => $check->remark_2,
					'user_bonus' => $check->user_bonus,
					'remark_3' => $check->remark_3,
					'pre_1' => $check->pre_1,
					'remark_4' => $check->remark_4,
					'pre_2' => $check->pre_2,
					'remark_5' => $check->remark_5,
					'user_image' => $check->user_image,
					'user_phone' => $check->user_phone,
					'branch_number' => $check->branch_number,
					'ext_number' => $check->ext_number,
					'kn_code' => $check->kn_code,
					'twitter' => $check->twitter,
					'facebook' => $check->facebook,
					'linkedin' => $check->linkedin,
					'google' => $check->google,
					'user_address' => $check->user_address,
					'user_status' => $check->user_status
				);

				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('notif_login_successfully', $this->input->post('user_mail'));

				redirect('whome');
			} else {
				$this->session->set_flashdata('notif_login_unsuccessfully', 'You failed to login, please check your Email or Password!');
				redirect('whome');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('notif_logout', 'You Have Left Our Page Session, Thank You For Visiting Our Page. We are waiting for your return.');
		redirect('whome');
	}
}
