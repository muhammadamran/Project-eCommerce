<?php
class M_banner extends CI_Model{

    public function get_banner(){
        return $this->db->query("SELECT * FROM tbl_banner")->result();
    }

    public function tambah_banner($input_data){
        return $this->db->insert('tbl_banner', $input_data);
    }

    function edit_banner($input_data)
    {       
        $id = $input_data['id'];
        $hasil = $this->db->where('id', $id)->update('tbl_banner', $input_data);
        
        return $hasil;    
    }

    function hapus_banner($id){
        $hasil=$this->db->query("DELETE FROM tbl_banner WHERE id='$id'");
        return $hasil;
    }
}