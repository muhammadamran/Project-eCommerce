<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ltesetting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ltesetting_model');
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
			$x['page'] = 'Setting';
			// End Page

			$this->load->view('include-lte/head', $x);
			$this->load->view('include-web/alert', $x);
			// $this->load->view('include-lte/cssTable', $x);
			$this->load->view('include-lte/top-header', $x);
			$this->load->view('include-lte/sidebar', $x);
			$this->load->view('setting', $x);
			$this->load->view('include-lte/activity', $x);
			$this->load->view('include-lte/panel', $x);
			$this->load->view('include-lte/footer', $x);
			// $this->load->view('include-lte/jsTable', $x);
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	public function update_setting_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$dataSetting = array(
				'title' => $this->input->post('Title'),
				'app_name' => $this->input->post('AppName'),
				'company_name' => $this->input->post('Company'),
				'seodesc' => $this->input->post('Description'),
				'tag' => $this->input->post('Tag'),
				'text_loader' => $this->input->post('TextLoader'),
				'footer' => $this->input->post('TextFooter'),
				'email' => $this->input->post('EmailHelpdesk'),
				'banner_title' => $this->input->post('BannerTitle'),
				'banner_paragraph' => $this->input->post('BannerParagraph'),
				'title_subscribe' => $this->input->post('SubscribeTitle'),
				'paragraph_subscribe' => $this->input->post('SubscribeParagraph')
			);

			$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
			if ($result) {
				$this->session->set_flashdata('unsuccess_alert', "Failed");
			} else {
				$this->session->set_flashdata('success_alert', "Success");
			}
			redirect('ltesetting');
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	// ICON
	public function update_icon_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$fileUpload     = $_FILES['upload']['name'];
			// Photo
			$filename = 'Icon' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$tmpname = $_FILES['upload']['tmp_name'];
			$sizename = $_FILES['upload']['size'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$wdot = substr($filename, 0, -4);
			$uniq_file =  $fileUpload;
			$newname =  'Icon' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$config['upload_path'] = './assets/apps/icon/';
			$config['allowed_types'] = "PNG|JPG|JPEG";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;

			if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {
				move_uploaded_file($tmpname, "./assets/apps/icon/" . $newname);

				$dataSetting = array(
					'icon' => $newname
				);

				$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
				if ($result) {
					$this->session->set_flashdata('unsuccess_alert', "Failed");
				} else {
					$this->session->set_flashdata('success_alert', "Success");
				}
				redirect('ltesetting');
			} else {
				$this->session->set_flashdata('check_file_type', "Check File Type!");
				redirect('ltesetting');
			}
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	// LOGO 1
	public function update_logo_one_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$fileUpload     = $_FILES['upload']['name'];
			// Photo
			$filename = 'Logo_1' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$tmpname = $_FILES['upload']['tmp_name'];
			$sizename = $_FILES['upload']['size'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$wdot = substr($filename, 0, -4);
			$uniq_file =  $fileUpload;
			$newname =  'Logo_1' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$config['upload_path'] = './assets/apps/logo/';
			$config['allowed_types'] = "PNG|JPG|JPEG";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;

			if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {
				move_uploaded_file($tmpname, "./assets/apps/logo/" . $newname);

				$dataSetting = array(
					'logo_1' => $newname
				);

				$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
				if ($result) {
					$this->session->set_flashdata('unsuccess_alert', "Failed");
				} else {
					$this->session->set_flashdata('success_alert', "Success");
				}
				redirect('ltesetting');
			} else {
				$this->session->set_flashdata('check_file_type', "Check File Type!");
				redirect('ltesetting');
			}
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	// LOGO 2
	public function update_logo_two_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$fileUpload     = $_FILES['upload']['name'];
			// Photo
			$filename = 'Logo_2' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$tmpname = $_FILES['upload']['tmp_name'];
			$sizename = $_FILES['upload']['size'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$wdot = substr($filename, 0, -4);
			$uniq_file =  $fileUpload;
			$newname =  'Logo_2' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$config['upload_path'] = './assets/apps/logo/';
			$config['allowed_types'] = "PNG|JPG|JPEG";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;

			if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {
				move_uploaded_file($tmpname, "./assets/apps/logo/" . $newname);

				$dataSetting = array(
					'logo_2' => $newname
				);

				$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
				if ($result) {
					$this->session->set_flashdata('unsuccess_alert', "Failed");
				} else {
					$this->session->set_flashdata('success_alert', "Success");
				}
				redirect('ltesetting');
			} else {
				$this->session->set_flashdata('check_file_type', "Check File Type!");
				redirect('ltesetting');
			}
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	// LOADER
	public function update_loader_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$fileUpload     = $_FILES['upload']['name'];
			// Photo
			$filename = 'Loader' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$tmpname = $_FILES['upload']['tmp_name'];
			$sizename = $_FILES['upload']['size'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$wdot = substr($filename, 0, -4);
			$uniq_file =  $fileUpload;
			$newname =  'Loader' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$config['upload_path'] = './assets/apps/loader/';
			$config['allowed_types'] = "PNG|JPG|JPEG";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;

			if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {
				move_uploaded_file($tmpname, "./assets/apps/loader/" . $newname);

				$dataSetting = array(
					'loader' => $newname
				);

				$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
				if ($result) {
					$this->session->set_flashdata('unsuccess_alert', "Failed");
				} else {
					$this->session->set_flashdata('success_alert', "Success");
				}
				redirect('ltesetting');
			} else {
				$this->session->set_flashdata('check_file_type', "Check File Type!");
				redirect('ltesetting');
			}
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	// BANNER
	public function update_banner_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$fileUpload     = $_FILES['upload']['name'];
			// Photo
			$filename = 'Banner' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$tmpname = $_FILES['upload']['tmp_name'];
			$sizename = $_FILES['upload']['size'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$wdot = substr($filename, 0, -4);
			$uniq_file =  $fileUpload;
			$newname =  'Banner' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$config['upload_path'] = './assets/apps/banner/';
			$config['allowed_types'] = "PNG|JPG|JPEG";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;

			if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {
				move_uploaded_file($tmpname, "./assets/apps/banner/" . $newname);

				$dataSetting = array(
					'banner' => $newname
				);

				$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
				if ($result) {
					$this->session->set_flashdata('unsuccess_alert', "Failed");
				} else {
					$this->session->set_flashdata('success_alert', "Success");
				}
				redirect('ltesetting');
			} else {
				$this->session->set_flashdata('check_file_type', "Check File Type!");
				redirect('ltesetting');
			}
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}

	// COVER PRODUCT
	public function update_cover_()
	{
		if ($this->session->userdata('user_role') == '1') {

			$ID = '1';

			$fileUpload     = $_FILES['upload']['name'];
			// Photo
			$filename = 'Cover' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$tmpname = $_FILES['upload']['tmp_name'];
			$sizename = $_FILES['upload']['size'];
			$exp = explode('.', $filename);
			$ext = end($exp);
			$wdot = substr($filename, 0, -4);
			$uniq_file =  $fileUpload;
			$newname =  'Cover' . date('d_F_Y') . '_' . date('H_i') . '_' . $fileUpload;
			$config['upload_path'] = './assets/website/product/cover/';
			$config['allowed_types'] = "PNG|JPG|JPEG";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;

			if ($ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'png' || $ext == 'jpg' || $ext == 'jpeg' || $ext == 'SVG' || $ext == 'svg') {
				move_uploaded_file($tmpname, "./assets/website/product/cover/" . $newname);

				$dataSetting = array(
					'cover' => $newname
				);

				$result = $this->Ltesetting_model->update('tb_setting_ecommerce', $dataSetting, $ID);
				if ($result) {
					$this->session->set_flashdata('unsuccess_alert', "Failed");
				} else {
					$this->session->set_flashdata('success_alert', "Success");
				}
				redirect('ltesetting');
			} else {
				$this->session->set_flashdata('check_file_type', "Check File Type!");
				redirect('ltesetting');
			}
		} else {
			$this->session->set_flashdata("start_session", "You didn't have access!");
			redirect("whome");
		}
	}
}
