<?php
class Product_model extends CI_Model {

    function input_keranjang($table, $data)
    {
        $this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
?>