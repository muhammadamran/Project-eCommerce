<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('pengguna_model');
    }

    public function index()
	{
        if($this->session->userdata('role') == 'Superadmin' || $this->session->userdata('role') == 'Admin')
        {
            if($this->session->userdata('role') == 'Superadmin')
            {
                $data = $this->pengguna_model->get_pengguna()->result();
                $x['data'] = $data;

                $this->load->view("include/head");
                $this->load->view("include/top-header");
                $this->load->view('v_pengguna', $x);
                $this->load->view("include/sidebar");
                $this->load->view("include/panel");
                $this->load->view("include/footer");
            }else{
                $this->load->view('Home');
            }
        }else{
            redirect("w_home");
        }
    }

    public function tambah_pengguna()
	{
        $input_data['email'] = $this->input->post('email', true); 			
        $input_data['nama_depan'] = $this->input->post('nama_depan', true);
        $input_data['nama_belakang'] = $this->input->post('nama_belakang', true);
        $input_data['no_hp'] = $this->input->post('no_hp', true);
        $input_data['username'] = $this->input->post('username', true);
        $input_data['password'] = md5($this->input->post('password', true));
        $input_data['image'] = 'user-12.jpg';
        $input_data['status'] = '1';
        $input_data['role'] = $this->input->post('role', true);
        $input_data['created_at'] = date("Y-m-d H:i:s");

        $cek_user = $this->pengguna_model->cek_user($input_data['username']);
        
        if(!$cek_user){
            $cek_email = $this->pengguna_model->cek_email($input_data['email']);
            if(!$cek_email){
                $result = $this->pengguna_model->tambah_pengguna($input_data);
            }else{
                $this->session->set_flashdata('pengguna', 'EMAIL PENGGUNA SUDAH TERDAFTAR.');
                $x['alert'] = 'ada';			
                redirect('pengguna',$x);
            }
        }else{
            $this->session->set_flashdata('pengguna', 'NIP PENGGUNA SUDAH TERDAFTAR.');
            $x['alert'] = 'ada';			
            redirect('pengguna',$x);
        }

        if (!$result) { 							
            $this->session->set_flashdata('pengguna', 'DATA PENGGUNA GAGAL DITAMBAHKAN.'); 				
            redirect('pengguna'); 			
        } else { 								
            $this->session->set_flashdata('pengguna', 'DATA PENGGUNA BERHASIL DITAMBAHKAN.');			
            redirect('pengguna'); 			
        }
    }

    public function edit_pengguna()
	{
        $id = $this->input->post('id_user', true);

        $input_data['email'] = $this->input->post('email', true); 			
        $input_data['nama_depan'] = $this->input->post('nama_depan', true);
        $input_data['nama_belakang'] = $this->input->post('nama_belakang', true);
        $input_data['no_hp'] = $this->input->post('no_hp', true);
        $input_data['username'] = $this->input->post('username', true);
        $input_data['status'] = $this->input->post('status', true);;
        $input_data['role'] = $this->input->post('role', true);

        $result = $this->pengguna_model->edit_pengguna($input_data, $id);

        if (!$result) { 							
            $this->session->set_flashdata('pengguna', 'DATA PENGGUNA GAGAL DIUBAH.');		
            redirect('pengguna'); 			
        } else { 								
            $this->session->set_flashdata('pengguna', 'DATA PENGGUNA BERHASIL DIUBAH.');			
            redirect('pengguna'); 			
        }
    }

    function hapus_pengguna(){
        $id_user=$this->input->post('id_user');
        $this->pengguna_model->hapus_pengguna($id_user);
        redirect('pengguna');
    }
}
?>