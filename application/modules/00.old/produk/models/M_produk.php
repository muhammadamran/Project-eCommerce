<?php
class M_produk extends CI_Model{

    public function get_produk(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM tbl_produk as a JOIN tbl_kategori as b ON a.kd_kategori = b.id")->result();
    }

    public function get_kategori(){
        return $this->db->query("SELECT * FROM  tbl_kategori")->result();
    }

    public function tambah_produk($input_data){
        return $this->db->insert('tbl_produk', $input_data);
    }

    function edit_produk($input_data)
    {       
        $id = $input_data['id'];
        $hasil = $this->db->where('id', $id)->update('tbl_produk', $input_data);
        
        return $hasil;    
    }

    function hapus_produk($id){
        return $this->db->query("DELETE FROM tbl_produk WHERE id='$id'");
    }
}