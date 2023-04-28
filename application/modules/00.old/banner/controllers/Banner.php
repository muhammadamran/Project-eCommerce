<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Banner extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_banner');
    }

    public function index(){
        if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
		{
            $data = $this->m_banner->get_banner();
            $x['data'] = $data[0];

			$this->load->view("include/head");
            $this->load->view("include/top-header");
            $this->load->view('v_banner',$x);
            $this->load->view("include/sidebar");
            $this->load->view("include/panel");
            $this->load->view("include/footer");
		}else{
            
			redirect("w_home");
		}
    }

    function upload_banner() {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = './assets/img/banner/';
            $config['upload_url'] =  base_url().'assets/img/banner/';
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/img/banner/".$newname);
            return $newname;
        }
    }

    
    public function tambah_banner()
	{
        $banner_pic = '';

        foreach($_FILES as $name => $fileInfo)
        { 
            if(!empty($_FILES[$name]['name'])){
                $newname = $this->upload_banner(); 
                $data[$name] = $newname;
                $banner_pic = $newname;
            }
        }

        $input_data['banner'] = $banner_pic;
        $input_data['judul'] = $this->input->post('judul');
        $input_data['status'] = $this->input->post('status', true); 

        $result = $this->m_banner->tambah_banner($input_data);
        
        if (!$result) { 							
            $this->session->set_flashdata('banner', 'Gagal Menambahkan Banner.'); 				
            redirect('banner'); 			
        } else {
            $this->session->set_flashdata('banner', 'Berhasil Menambahkan Banner.'); 		
            redirect('banner'); 			
        }
    }

    function edit_banner()
    {
        $input_data['id'] = $this->input->post('id');
        $input_data['judul'] = $this->input->post('judul');
        $input_data['status'] = $this->input->post('status');
        $result = $this->m_banner->edit_banner($input_data);

        if (!$result) { 							
            $this->session->set_flashdata('banner', 'Gagal Menghapus Banner.'); 				
            redirect('banner'); 			
        } else { 								
            $this->session->set_flashdata('banner', 'Berhasil Menghapus Banner..');			
            redirect('banner'); 			
        }
    }

    function hapus_banner()
    {
        $id = $this->input->post('id');
        $result = $this->m_banner->hapus_banner($id);

        if (!$result) { 							
            $this->session->set_flashdata('banner', 'Gagal Menghapus Banner.'); 				
            redirect('banner'); 			
        } else { 								
            $this->session->set_flashdata('banner', 'Berhasil Menghapus Banner..');			
            redirect('banner'); 			
        }
    }

    function table_banner() {
        $data = $this->m_banner->get_banner();

        $no = 1;
        $apa = array();

        foreach($data as $r) {
            $apax = base_url().'assets/img/banner/'.$r->banner;
            $apaxx = base_url().'assets/img/banner/no_image.png';

            if(file_exists('assets/img/banner/'.$r->banner) && $r->banner != NULL) {
                $bn = $apax;
            }else{ 
                $bn = $apaxx;
            } 
            
            $banner = "<img class='thumb-image setpropileam' src='".$bn."' width='128px' height='128px'>";
            $status = $r->status == 1 ? "<label class='label label-success'>Show</label>" : "<label class='label label-warning'>Hide</label>";
                          
            $aksi = "<a href='javascript:;' data-id='$r->id' data-status='$r->status' data-toggle='modal' data-target='#editbanner' class='btn btn-sm btn-primary'><i class='fa fas fa-edit'></i></a> <a href='javascript:;' data-id='$r->id' data-banner='$r->banner' data-toggle='modal' data-target='#hapusbanner' class='btn btn-sm btn-danger'><i class='fa fas fa-trash'></i></a>";
            
            $apa[] = array(
                $no++,
                $r->judul,
                $banner,
                $status,
                $aksi
            );
        }
        
        echo json_encode($apa);
    }
}