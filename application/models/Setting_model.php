<?php
class Setting_model extends CI_Model
{
    public function perusahaan()
    {
        return $this->db->query("SELECT * FROM tbl_perusahaan")->result();
    }

    public function get_perusahaan()
    {
        $query = $this->db->query("SELECT * FROM tbl_perusahaan")->result();

        return $query;
    }

    function get_data_content()
    {
        $query = $this->db->query("SELECT * FROM tbl_banner WHERE status='1'")->result();

        return $query;
    }
}
