<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class W_home extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
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
            $this->load->view('home', $x);
            $this->load->view('mode/footer', $f);
    }

    public function aksi_login(){
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => md5($password)
            );
            
			$cek = $this->home_model->cek_login('tbl_users',$data);
			$perusahaan = $this->home_model->perusahaan('tbl_users',$data);
			
			if(@$cek){

				$data_session = array(
					'nama_perusahaan' => $perusahaan[0]->nama_perusahaan,
					'icon' => $perusahaan[0]->logo,
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
			}else{
                $this->session->set_flashdata('notif_login_gagal', '<script>alert("Maaf Email atau Password Anda Salah, Silahkan Coba Lagi.");window.history.go(-1);</script>');
				redirect('w_home/index');
			}
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('notif_logout', '<script>alert("Anda Telah Keluar Dari Session Laman Kami, Terimkasih Telah Mengunjungi Laman Kami. Kami menunggu anda kembali .");window.history.go(-1);</script>');
		redirect('w_home');
	}

	public function create_account()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'username' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'no_hp' => $this->input->post('no_hp'),
			// 'image' => $this->input->post('image'),
			'role' => $this->input->post('role'),
			'status' => $this->input->post('status'),
			'created_at' => $this->input->post('created_at')
		);

		$email = $this->input->post('email');
		$cek = $this->home_model->ready_user($email);

		if(!empty($cek)){
			$this->session->set_flashdata('notif_email', '<script>alert("Email anda sudah terdaftar, Silahkan Coba Email lain.");window.history.go(-1);</script>');
			redirect('w_home/index');
		}else{
			$this->home_model->input_create_account('tbl_users', $data);
			$this->session->set_flashdata('notif_create_account', '<script>alert("Hai, Anda Sudah Terdaftar Menjadi Member Kami. Silahkan SIGN IN dan Kunjungi Produk Kami.");window.history.go(-1);</script>');
			redirect('w_home/index', $data);
			
		}

	}
}
