<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('kategori_model');
    }

    public function index(){
        if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
		{
            $x['data'] = $this->kategori_model->kategori();

			$this->load->view("include/head");
            $this->load->view("include/top-header");
            $this->load->view('v_kategori',$x);
            $this->load->view("include/sidebar");
            $this->load->view("include/panel");
            $this->load->view("include/footer");
		}else{
            
			redirect("w_home");
		}
    }

    public function tambah_kategori(){
        $input_data['nama_kategori'] = $this->input->post('nama_kategori', true);
        $input_data['status'] = $this->input->post('status', true);
        $input_data['created_at'] = date('Y-m-d H:i:s');

        $result = $this->kategori_model->tambah_kategori($input_data);
        
        if (!$result) { 							
            $this->session->set_flashdata('kategori', 'Gagal Menambahkan kategori.'); 				
            redirect('kategori'); 			
        } else {
            $this->session->set_flashdata('kategori', 'Berhasil Menambahkan kategori.'); 		
            redirect('kategori'); 			
        }
    }

    function edit_kategori(){

        $input_data['id'] = $this->input->post('id');
        $input_data['nama_kategori'] = $this->input->post('nama_kategori', true);
        $input_data['status'] = $this->input->post('status', true);

        $result = $this->kategori_model->edit_kategori($input_data);

        if (!$result) { 							
            $this->session->set_flashdata('kategori', 'Gagal Mengubah kategori.'); 				
            redirect('kategori'); 			
        } else { 								
            $this->session->set_flashdata('kategori', 'Berhasil Mengubah kategori..');			
            redirect('kategori'); 			
        }
    }

    function hapus_kategori(){
        $id = $this->input->post('id');
        $result = $this->kategori_model->hapus_kategori($id);

        if (!$result) { 							
            $this->session->set_flashdata('kategori', 'Gagal Menghapus kategori.'); 				
            redirect('kategori'); 			
        } else { 								
            $this->session->set_flashdata('kategori', 'Berhasil Menghapus kategori..');			
            redirect('kategori'); 			
        }
    }
}