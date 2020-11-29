<?php

defined('BASEPATH') or exit('No direct script access allowed');

class organisasi_model extends CI_Model
{

    public function tampil_data_org()
    {
        return $this->db->get('organisasi');
    }

    public function getorganisasiByID($id_organisasi)
    {
        return $this->db->get_where('organisasi', array('id_organisasi' => $id_organisasi))->row_array();
    }
    public function tambahdataorg()
    {
        $data = array(
            "id_user" => $this->input->post('id_user', true),
            "no_induk_pejabat" => $this->input->post('no_induk_pejabat', true),
            "nama_org" => $this->input->post('nama_org', true),
            "jabatan_org" => $this->input->post('jabatan_org', true),
            "nama_pejabat_org" => $this->input->post('nama_pejabat_org', true),
            "email_org" => $this->input->post('email_org', true),
            "level" => $this->input->post('level', true),
            "id_pimpinan" => $this->input->post('id_pimpinan', true),
            "logo_" => $this->input->post('logo_', true)
        );
        return $this->db->insert('organisasi', $data);
    }

    public function hapusdataorg($id_organisasi)
    {
        $this->db->where('id_organisasi', $id_organisasi);
        $this->db->delete('organisasi');
    }

    public function ubahdataorg()
    {
        $data = [
            "no_induk_pejabat" => $this->input->post('no_induk_pejabat', true),
            "nama_org" => $this->input->post('nama_org', true),
            "jabatan_org" => $this->input->post('jabatan_org', true),
            "nama_pejabat_org" => $this->input->post('nama_pejabat_org', true),
            "email_org" => $this->input->post('email_org', true)
        ];
        $this->db->where('id_organisasi', $this->input->post('id_organisasi'));
        $this->db->update('organisasi', $data);
    }
    // public function getUser(){
    //     return $this->db->get('user');
    // }

    // public function add_post(){
    //     $this->db->insert('user', $post_data);
    //     $insert_id = $this->db->insert_id();

    //     return $insert_id;
    // }
    // public function getUserById($id){
    //     return $this->db->get_where('user', array('id_user' => $id)) ->row_array();
    // }

}

/* End of file pimpinan_model.php */
