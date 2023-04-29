<?php
class Ltesetting_model extends CI_Model
{
    public function update($table, $dataSetting, $ID)
    {
        $this->db->where('id', $ID);
        $this->db->update($table, $dataSetting);
    }
}
