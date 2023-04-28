<?php
class Tentangkami_model extends CI_Model {

    function get_data()
	{
        $query = $this->db->query("SELECT * FROM tbl_perusahaan")->result();
        
        return $query;
    }

    function input_create($table, $data)
    {
        $this->db->insert($table,$data);
    }
}
?>