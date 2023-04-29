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
		$dataSetting = $this->Setting_model->setting();
		// Text
		// Title
		$x['web_title'] = $dataSetting[0]->title;
		// Company Name
		$x['web_companyname'] = $dataSetting[0]->company_name;
		// App Name
		$x['web_appname'] = $dataSetting[0]->app_name;
		// SEO Desc
		$x['web_seodesc'] = $dataSetting[0]->seodesc;
		// Tag
		$x['web_tag'] = $dataSetting[0]->tag;
		// Text Loader
		$x['web_text_loader'] = $dataSetting[0]->text_loader;
		// Text Footer
		$x['web_footer'] = $dataSetting[0]->footer;
		// Email HelpDesk
		$x['web_email'] = $dataSetting[0]->email;
		// Banner Title
		$x['web_banner_title'] = $dataSetting[0]->banner_title;
		// Banner Paragraph
		$x['web_banner_paragraph'] = $dataSetting[0]->banner_paragraph;
		// Subscribe Title
		$x['web_subscribe_title'] = $dataSetting[0]->title_subscribe;
		// Subscribe Paragraph
		$x['web_subscribe_paragraph'] = $dataSetting[0]->paragraph_subscribe;
		// End Text

		// Pictures
		// Icon
		$x['web_icon'] = $dataSetting[0]->icon;
		// Logo 1
		$x['web_logo_1'] = $dataSetting[0]->logo_1;
		// Logo 2
		$x['web_logo_2'] = $dataSetting[0]->logo_2;
		// Loader
		$x['web_loader'] = $dataSetting[0]->loader;
		// Banner Images
		$x['web_banner'] = $dataSetting[0]->banner;
		// Images Cover
		$x['web_cover'] = $dataSetting[0]->cover;
		// End Pictures
		// End Setting

		// Page
		$x['page'] = 'Home';
		// End Page
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
