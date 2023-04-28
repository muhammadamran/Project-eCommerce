<?php
class Pengguna_model extends CI_Model 
{
    function get_pengguna(){
        $query = $this->db->query("SELECT * FROM tbl_users");
        return $query;
    }

    function tambah_pengguna($input_data){   
        $add_peg = $this->db->insert('tbl_users', $input_data);
        return $add_peg;
    }

    function edit_pengguna($input_data, $id){
        return $this->db->where('id_user', $id)->update('tbl_users', $input_data);   
    }
    
    function hapus_pengguna($id_user){
        return $this->db->query("DELETE FROM tbl_users WHERE id_user='$id_user'");
    }

    function cek_user($username){   
        return $this->db->query("SELECT * FROM tbl_users WHERE username='$username'")->result();
    }

    function cek_email($email){   
        return $this->db->query("SELECT * FROM tbl_users WHERE email='$email'")->result();
    }
}
?>