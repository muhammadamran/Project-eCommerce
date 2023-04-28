<?php
class User_model extends CI_Model {

    function login_user($username,$password)
	{
        $query = $this->db->get_where('tbl_users',array('username'=>$username));
        
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            $this->db->where("username='$username'");
            $this->db->where("password='$password'");
            
            $result = $this->db->get('tbl_users')->result();


            if(!empty($result)){
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('email',$data_user->email);
                $this->session->set_userdata('nama_depan',$data_user->nama_depan);
                $this->session->set_userdata('nama_belakang',$data_user->nama_belakang);
                $this->session->set_userdata('no_hp',$data_user->no_hp);
                $this->session->set_userdata('role',$data_user->role);
                $this->session->set_userdata('image',$data_user->image);
                $this->session->set_userdata('is_login',TRUE);
                

                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }
    
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('user');
		}
    }
}
?>