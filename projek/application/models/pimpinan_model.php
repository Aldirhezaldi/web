<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pimpinan_model extends CI_Model
{

    public function tampil_data_pim()
    {
        return $this->db->get('pimpinan_polinema');
    }
    public function tambahdatapim()
    {
        $data = array(
            "id_user" => $this->input->post('id_user', true),
            "nip_pimpinan" => $this->input->post('nip_pimpinan', true),
            "nama_pimpinan" => $this->input->post('nama_pimpinan', true),
            "jabatan_pimpinan" => $this->input->post('jabatan_pimpinan', true),
            "email_pimpinan" => $this->input->post('email_pimpinan', true)
        );
        return $this->db->insert('pimpinan_polinema', $data);
    }

    public function ubahdatapim()
    {
        $data = [
            "nip_pimpinan" => $this->input->post('nip_pimpinan', true),
            "nama_pimpinan" => $this->input->post('nama_pimpinan', true),
            "jabatan_pimpinan" => $this->input->post('jabatan_pimpinan', true),
            "email_pimpinan" => $this->input->post('email_pimpinan', true)
        ];
        $this->db->where('id_pimpinan', $this->input->post('id_pimpinan'));
        $this->db->update('pimpinan_polinema', $data);
    }

    // public function getUser(){
    //     return $this->db->get('user');
    // }

    // public function add_post(){
    //     $this->db->insert('user', $post_data);
    //     $insert_id = $this->db->insert_id();

    //     return $insert_id;
    // }

    public function getpimpinanByID($id_pimpinan)
    {
        return $this->db->get_where('pimpinan_polinema', array('id_pimpinan' => $id_pimpinan))->row_array();
    }

    public function hapusdatapim($id_pimpinan)
    {
        $this->db->where('id_pimpinan', $id_pimpinan);
        $this->db->delete('pimpinan_polinema');
    }

    public function getUser()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getuserByID($id_user)
    {
        return $this->db->get_where('user', array('id_user' => $id_user))->row_array();
    }
}

/* End of file pimpinan_model.php */
