<?php
class Krisar_model extends CI_Model{

    public function krisar(){
        return $this->db->query("SELECT * FROM tbl_kritiksaran")->result();
    }
}