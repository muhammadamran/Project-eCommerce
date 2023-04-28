<?php
class M_perusahaan extends CI_Model{

	public function get_perusahaan(){
        return $this->db->query("SELECT * FROM tbl_perusahaan")->result();
    }

    public function edit_perusahaan($input_data, $id){
        $result = $this->db->where('id', $id)->update('tbl_perusahaan', $input_data);

        return $result;
    }
}