<?php
class M_pesanan extends CI_Model{

    public function get_pesanan(){
        return $this->db->query("SELECT a.*, b.nama_depan, b.nama_belakang FROM tbl_transaksi as a JOIN tbl_users as b ON a.id_user = b.id_user")->result();
    }

    public function get_pdf($id){
        return $this->db->query("SELECT a.*, b.nama_depan, b.nama_belakang FROM tbl_transaksi as a JOIN tbl_users as b ON a.id_user = b.id_user WHERE id ='$id'")->result();
    }

    function update_stok($id_transaksi){

        $result = $this->db->query("SELECT * FROM tbl_keranjang WHERE kode_transaksi LIKE '$id_transaksi'")->result();
        
        foreach($result as $row){
            $apa = $this->db->query("SELECT stok FROM tbl_produk WHERE id LIKE '$row->id_produk'")->result();

            $apax = $apa[0]->stok;
            $apaxx = $apax - $row->jumlah;

            $data = array(
                'stok' => $apaxx,
            );

            $this->db->where('id', $row->id_produk);
            $this->db->update('tbl_produk',$data);
        }
    }

    function tambah_notif($table,$data){
        return $this->db->insert($table,$data); 
    }

    function dibatalkan($table,$data,$id){
        $this->db->where('id', $id);
        return $this->db->update($table,$data); 
    }

    function diproses($table,$data,$id){
        $this->db->where('id', $id);
        return $this->db->update($table,$data); 
    }

    function dikirim($table,$data,$id){
        $this->db->where('id', $id);
        return $this->db->update($table,$data); 
    }

    function selesai($table,$data,$id){
        $this->db->where('id', $id);
        return $this->db->update($table,$data); 
    }
}