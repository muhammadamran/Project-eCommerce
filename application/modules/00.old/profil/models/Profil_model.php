<?php
class Profil_model extends CI_Model {

    function get_data()
	{
        $username = $this->session->userdata('username');
        $query = $this->db->query("SELECT * FROM tbl_users where username = '$username'")->result();

        return $query;
    }

    function edit_profil($input_data)
    {       
        
        $username = $this->session->userdata('username');
        $hasil = $this->db->where('username', $username)->update('tbl_users', $input_data);
        
        return $hasil;       
             
    }
}
?>