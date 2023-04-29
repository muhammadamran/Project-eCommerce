<?php
class Setting_model extends CI_Model
{
    public function setting()
    {
        return $this->db->query("SELECT * FROM tb_setting_ecommerce")->result();
    }
}
