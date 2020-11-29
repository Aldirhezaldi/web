<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getuserByID($id)
    {
        return $this->db->get_where('user', array('id' => $id))->row_array();
    }
    public function getMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function tambahdataguru()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "id_mapel" => $this->input->post('id_mapel', true),
            "nip_guru" => $this->input->post('nip_guru', true),
            "nama_guru" => $this->input->post('nama_guru', true)
        ];
        $this->db->insert('guru', $data);
    }
    public function tambahdatamapel()
    {
        $data = [
            "kode_mapel" => $this->input->post('kode_mapel', true),
            "nama_mapel" => $this->input->post('nama_mapel', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];
        $this->db->insert('mapel', $data);
    }
}

/* End of file user_model.php */
