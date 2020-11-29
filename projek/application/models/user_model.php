<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

    public function getuserByID($id_user)
    {
        return $this->db->get_where('user', array('id_user' => $id_user))->row_array();
    }

    public function ubahdata()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }
    public function getUser()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }
}

/* End of file user_model.php */
