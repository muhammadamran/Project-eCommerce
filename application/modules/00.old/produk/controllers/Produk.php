<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Produk extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_produk');
    }

    public function index(){
        if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
		{
            $x['data'] = $this->m_produk->get_produk();
            $x['kategori'] = $this->m_produk->get_kategori();

			$this->load->view("include/head");
            $this->load->view("include/top-header");
            $this->load->view('v_produk',$x);
            $this->load->view("include/sidebar");
            $this->load->view("include/panel");
            $this->load->view("include/footer");
		}else{
            
			redirect("w_home");
		}
    }

    function upload_produk() {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = './assets/img/produk/cover/';
            $config['upload_url'] =  base_url().'assets/img/produk/cover/';
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/img/produk/cover/".$newname);
            return $newname;
        }
    }

    public function tambah_produk(){
        $produk_pic = '';

        foreach($_FILES as $name => $fileInfo)
        { 
            if(!empty($_FILES[$name]['name'])){
                $newname = $this->upload_produk(); 
                $data[$name] = $newname;
                $produk_pic = $newname;
            }
        }

        $dataInfo = array();
        $cpt = count($_FILES['pic']['name']);
        
        for($i=0; $i<$cpt; $i++){
            $filename=$_FILES['pic']['name'][$i];
            $tmpname=$_FILES['pic']['tmp_name'][$i];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext;
            $config['upload_path'] = './assets/img/produk/';
            $config['upload_url'] =  base_url().'assets/img/produk/';
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/img/produk/".$newname);

            $dataInfo[] = $newname;
        }

        $picss = json_encode($dataInfo);

        $stok = $this->input->post('berat', true) * 3;

        $input_data['cover'] = $produk_pic;
        $input_data['nama_produk'] = $this->input->post('nama_produk', true);
        $input_data['kd_kategori'] = $this->input->post('kd_kategori', true);
        $input_data['deskripsi'] = $this->input->post('deskripsi', true); 
        $input_data['gambar'] = $picss;
        $input_data['status'] = '1';
        $input_data['harga'] = $this->input->post('harga', true);
        $input_data['berat'] = $this->input->post('berat', true);
        $input_data['diskon'] = $this->input->post('diskon', true);
        $input_data['stok'] = $stok;
        $input_data['created_at'] = date('Y-m-d H:i:s');

        $result = $this->m_produk->tambah_produk($input_data);
        
        if (!$result) { 							
            $this->session->set_flashdata('produk', 'Gagal Menambahkan Produk.'); 				
            redirect('produk'); 			
        } else {
            $this->session->set_flashdata('produk', 'Berhasil Menambahkan Produk.'); 		
            redirect('produk'); 			
        }
    }

    function edit_produk()
    {
        $stok = $this->input->post('berat', true) * 3;

        $input_data['id'] = $this->input->post('id');
        $input_data['status'] = $this->input->post('status');
        $input_data['berat'] = $this->input->post('berat', true);
        $input_data['diskon'] = $this->input->post('diskon', true);
        $input_data['stok'] = $stok;
        $input_data['deskripsi'] = $this->input->post('deskripsi', true);

        $result = $this->m_produk->edit_produk($input_data);

        if (!$result) { 							
            $this->session->set_flashdata('produk', 'Gagal Mengubah Produk.'); 				
            redirect('produk'); 			
        } else { 								
            $this->session->set_flashdata('produk', 'Berhasil Mengubah Produk..');			
            redirect('produk'); 			
        }
    }

    function hapus_produk()
    {
        $id = $this->input->post('id');
        $result = $this->m_produk->hapus_produk($id);

        if (!$result) { 							
            $this->session->set_flashdata('produk', 'Gagal Menghapus Produk.'); 				
            redirect('produk'); 			
        } else { 								
            $this->session->set_flashdata('produk', 'Berhasil Menghapus Produk..');			
            redirect('produk'); 			
        }
    }

}