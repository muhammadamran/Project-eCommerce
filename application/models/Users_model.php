<?php
class Users_model extends CI_Model
{
    public function get_users()
    {
        $dbUsers = $this->load->database('users', TRUE);
        return $dbUsers->query("SELECT * FROM tb_book_user")->result_array();
    }

    function check_login($table, $data)
    {
        $dbUsers = $this->load->database('users', TRUE);
        $query = $dbUsers->get_where($table, $data);

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    function input_create_account($table, $data)
    {
        $dbUsers = $this->load->database('users', TRUE);
        $dbUsers->insert($table, $data);
    }

    function input_log($table, $data)
    {
        $dbUsers = $this->load->database('users', TRUE);
        $dbUsers->insert($table, $data);
    }

    public function ready_user($username)
    {
        $dbUsers = $this->load->database('users', TRUE);
        return $dbUsers->query("SELECT * FROM tb_book_user WHERE user_name='$username'")->result();
    }
}
