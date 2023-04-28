<?php
class Home_model extends CI_Model{

	public function member(){
        return $this->db->query("SELECT COUNT(*) as member FROM tbl_users WHERE role='Member'")->result();
    }

    public function produk(){
        return $this->db->query("SELECT COUNT(*) as produk FROM tbl_produk")->result();
    }

    public function pesanan(){
        return $this->db->query("SELECT COUNT(*) as pesanan FROM tbl_transaksi")->result();
    }

    public function krisar(){
        return $this->db->query("SELECT COUNT(*) as krisar FROM tbl_kritiksaran")->result();
    }
}
