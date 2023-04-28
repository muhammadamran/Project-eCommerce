<?php
class Home_model extends CI_Model {

    function cek_login($table,$data){      
        $query = $this->db->get_where($table,$data);

        if ($query->num_rows() == 1) {
            return $query->row();
        }else{
            return false;
        }
    }

    public function ready_user($email){
        return $this->db->query("SELECT * FROM tbl_users WHERE email='$email'")->result();
    }

    public function perusahaan(){
        return $this->db->query("SELECT * FROM tbl_perusahaan")->result();
    }

    public function get_perusahaan()
    {
        $query = $this->db->query("SELECT * FROM tbl_perusahaan")->result();

        return $query;
    }

    function get_data_content()
	{
        $query = $this->db->query("SELECT * FROM tbl_banner WHERE status='1'")->result();
        
        return $query;
    }

    function input_create_account($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_log($table, $data)
    {
        $this->db->insert($table,$data);
    }
}
?>