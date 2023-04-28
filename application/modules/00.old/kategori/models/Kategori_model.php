<?php
class kategori_model extends CI_Model{

    public function kategori(){
        return $this->db->query("SELECT * FROM tbl_kategori")->result();
    }

    public function tambah_kategori($input_data){
        return $this->db->insert('tbl_kategori', $input_data);
    }

    function edit_kategori($input_data)
    {       
        $id = $input_data['id'];
        $hasil = $this->db->where('id', $id)->update('tbl_kategori', $input_data);
        
        return $hasil;    
    }

    function hapus_kategori($id){
        return $this->db->query("DELETE FROM tbl_kategori WHERE id='$id'");
    }
}