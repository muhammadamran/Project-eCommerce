<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Perusahaan extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('m_perusahaan');
  }

  public function index(){
    if($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == 'Superadmin')
    {
      $data = $this->m_perusahaan->get_perusahaan();
      $x['data'] = $data[0];

      $this->load->view("include/head");
      $this->load->view("include/top-header");
      $this->load->view('v_perusahaan',$x);
      $this->load->view("include/sidebar");
      $this->load->view("include/panel");
      $this->load->view("include/footer");         

    }else{
        //jika session belum terdaftar, maka redirect ke halaman login
        redirect("w_home");
    }
  }

  function upload_logo() {
    foreach($_FILES as $name => $fileInfo)
    {
        $filename=$_FILES[$name]['name'];
        $tmpname=$_FILES[$name]['tmp_name'];
        $exp=explode('.', $filename);
        $ext=end($exp);
        $newname=  $exp[0].'_'.time().".".$ext; 
        $config['upload_path'] = './assets/img/logo/';
        $config['upload_url'] =  base_url().'assets/img/logo/';
        $config['allowed_types'] = "gif|jpg|jpeg|png";
        $config['max_size'] = '2000000';
        $config['file_name'] = $newname;
        $this->load->library('upload', $config);
        move_uploaded_file($tmpname,"assets/img/logo/".$newname);
        return $newname;
    }
  }

  public function update()
	{
    $logo_pic = 'logo-bs4.png';

    if($this->input->post('logoOld')) {  
        $newname = $this->input->post('logoOld');
        $logo_pic = $newname;
    } else {
        $logo_pic ='logo-bs4.png';
    }

    foreach($_FILES as $name => $fileInfo)
    { 
      if(!empty($_FILES[$name]['name'])){
        $newname = $this->upload_logo(); 
        $data[$name] = $newname;
        $logo_pic = $newname;
      } else {  
        if($this->input->post('logoOld')) {  
            $newname = $this->input->post('logoOld');
            $data[$name]=$newname;
            $logo_pic =$newname;
        } else {
            $data[$name]='';
            $logo_pic ='logo-bs4.png';
        } 
      } 
    }

    $id = $this->input->post('id', true);

    $input_data['nama_perusahaan'] = $this->input->post('nama_perusahaan', true);
    $input_data['email'] = $this->input->post('email', true); 			
    $input_data['no_telpon'] = $this->input->post('no_telpon', true);
    $input_data['slogan'] = $this->input->post('slogan', true);
    $input_data['logo'] = $logo_pic;
    $input_data['link_fb'] = $this->input->post('link_fb', true); 
    $input_data['link_twitter'] = $this->input->post('link_twitter', true); 
    $input_data['link_instagram'] = $this->input->post('link_instagram', true); 

    $result = $this->m_perusahaan->edit_perusahaan($input_data, $id);
    
    if (!$result) { 							
        $this->session->set_flashdata('notif_update_user', 'Gagal mengubah profil.'); 				
        redirect('perusahaan'); 			
    } else {
        $this->session->set_userdata('nama_perusahaan',$this->input->post('nama_perusahaan', true));
        $this->session->set_userdata('icon',$logo_pic);
        redirect('perusahaan'); 			
    }
  }
}