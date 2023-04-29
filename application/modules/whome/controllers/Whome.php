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
			// Icon
			// Title
			// Company Name
			// Logo 1
			// Logo 2
		}
		// End Setting

		// IMAGES COVER 2 PRODUCT
		$x['BackgroundItem'] = 'assets/website/product/cover/bg-blue.svg';
		// END IMAGES COVER 2 PRODUCT 

		$dataUsers = $this->Users_model->get_users();
		$x['title'] = $dataUsers;
		$x['data'] = $dataUsers;

		$this->load->view('include-web/head', $x);
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
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => $password
			);

			$cek = $this->home_model->cek_login('tbl_users', $data);
			$perusahaan = $this->home_model->perusahaan('tbl_users', $data);

			if (@$cek) {

				$data_session = array(
					'icon' => $perusahaan[0]->logo,
					'nama_perusahaan' => $perusahaan[0]->nama_perusahaan,
					'id_user' => $cek->id_user,
					'username' => $username,
					'password' => $password,
					'email' => $cek->email,
					'nama_depan' => $cek->nama_depan,
					'nama_belakang' => $cek->nama_belakang,
					'no_hp' => $cek->no_hp,
					'image' => $cek->image,
					'role' => $cek->role,
					'status' => $cek->status,
					'created_at' => $cek->created_at
				);

				$data_log = array(
					'username' => $username,
					'role_akses' => $cek->role,
					'login_datetime' => date('Y-m-d H:i:s'),
					'status' => 'Login'
				);

				$this->session->set_userdata($data_session);
				$this->home_model->input_log('tbl_log', $data_log);
				$this->session->set_flashdata('notif_login_berhasil', '<script>alert("Hai, Anda Berhasil Login, Silahkan Kunjungi dan Pesan Produk Kami.");window.history.go(-1);</script>');
				redirect('w_home/index');
			} else {
				$this->session->set_flashdata('notif_login_gagal', '<script>alert("Maaf Email atau Password Anda Salah, Silahkan Coba Lagi.");window.history.go(-1);</script>');
				redirect('w_home/index');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('notif_logout', '<script>alert("You Have Left Our Page Session, Thank You For Visiting Our Page. We are waiting for your return.");window.history.go(-1);</script>');
		redirect('whome');
	}
}
