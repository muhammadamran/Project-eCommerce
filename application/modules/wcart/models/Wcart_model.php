<?php
class Wcart_model extends CI_Model
{

    public function check_my_cart($id_user, $username)
    {
        return $this->db->query("SELECT COUNT(*) AS my_cart FROM tb_cart_ecommerce WHERE id_user='$id_user' AND username='$username' ORDER BY id DESC")->result();
    }

    public function cart($id_user, $username)
    {
        return $this->db->query("SELECT * FROM tb_cart_ecommerce WHERE id_user='$id_user' AND username='$username' ORDER BY id DESC")->result_array();
    }
}
