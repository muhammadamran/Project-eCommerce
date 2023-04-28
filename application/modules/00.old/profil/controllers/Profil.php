<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('profil_model');
    }

    public function index()
	{
		if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
		{
            $data = $this->profil_model->get_data();
            $x['data'] = $data[0];

			$this->load->view("include/head");
            $this->load->view("include/top-header");
            $this->load->view('profil', $x);
            $this->load->view("include/sidebar");
            $this->load->view("include/panel");
            $this->load->view("include/footer");
		}else{
			redirect("w_home");
		}
    }

    function upload() {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = './assets/img/user/';
            $config['upload_url'] =  base_url().'assets/img/user/';
            $config['allowed_types'] = "gif|jpg|jpeg|png";
            $config['max_size'] = '2000000';
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/img/user/".$newname);
            return $newname;
        }
    }

    public function update()
	{
        $profile_pic = 'user-12.jpg';

        if($this->input->post('fileOld')) {  
            $newname = $this->input->post('fileOld');
            $profile_pic =$newname;
        } else {
            $profile_pic ='user-12.jpg';
        }

        foreach($_FILES as $name => $fileInfo)
        { 
             if(!empty($_FILES[$name]['name'])){
                $newname=$this->upload(); 
                $data[$name]=$newname;
                $profile_pic =$newname;
             } else {  
                if($this->input->post('fileOld')) {  
                    $newname = $this->input->post('fileOld');
                    $data[$name]=$newname;
                    $profile_pic =$newname;
                } else {
                    $data[$name]='';
                    $profile_pic ='user-12.jpg';
                } 
            } 
        }

        $password = $this->input->post('password', true);

        $input_data['username'] = $this->input->post('username', true);
        $input_data['nama_depan'] = $this->input->post('nama_depan', true); 			
        $input_data['nama_belakang'] = $this->input->post('nama_belakang', true);
        $input_data['email'] = $this->input->post('email', true); 	

        if($password != NULL){
            $input_data['password'] = md5($this->input->post('password', true));
        }

        $input_data['image'] = $profile_pic;

        $result = $this->profil_model->edit_profil($input_data);

        if (!$result) { 							
            $this->session->set_flashdata('notif_update_user', 'Gagal mengubah profil.'); 				
            redirect('profil'); 			
        } else { 								
            $this->session->set_flashdata('notif_update_user', 'Profil Berhasil diubah.');
            $this->session->set_userdata('username',$input_data['username']);
            $this->session->set_userdata('nama_depan',$input_data['nama_depan']);
            $this->session->set_userdata('image',$input_data['image']);				
            redirect('profil'); 			
        }
    }
}
?>