<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getuserByID($id)
    {
        return $this->db->get_where('user', array('id_user' => $id))->row_array();
    }
    public function getuserByAlamat($alamat)
    {
        return $this->db->get_where('user', ['id_user' => $alamat])->row_array();
    }
    public function getMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function getallGuru()
    {
        $query = $this->db->get('guru');
        return $query->result_array();
    }

    public function getallMapel()
    {
        $query = $this->db->get('mapel');
        return $query->result_array();
    }
    public function tambahdatamurid()
    {
        $data = [
            "id_murid" => $this->input->post('id_murid', true),
            "id_user" => $this->input->post('id_user', true),
            "id_guru" => $this->input->post('id_guru', true),
            "id_mapel" => $this->input->post('id_mapel', true),
            "nim_murid" => $this->input->post('nim_murid', true)
        ];
        $this->db->insert('murid', $data);
    }
}

/* End of file user_model.php */
