<?php
class Checkout_model extends CI_Model {

    function input_create($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function input_notif($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function update_keranjang($table,$data,$kode_transaksi)
    {

        $this->db->where('kode_transaksi', $kode_transaksi);
        $this->db->update($table,$data); 

    }
}
?>