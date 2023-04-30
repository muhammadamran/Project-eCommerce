<?php
class Lteproduct_model extends CI_Model
{
    public function subscribe()
    {
        return $this->db->query("SELECT * FROM tb_subscribe_ecommerce GROUP BY email ORDER BY id DESC")->result_array();
    }
}
