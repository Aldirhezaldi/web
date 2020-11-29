<?php

defined('BASEPATH') or exit('No direct script access allowed');

class guru_model extends CI_Model
{
    public function getAllguru()
    {
        $this->db->select('*');
        $this->db->from('guru g');
        $this->db->join('user u', 'u.id_user = g.id_user');
        $this->db->join('mapel m', 'm.id_mapel = g.id_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function datatables()
    {
        $query = $this->db->order_by('id_guru', 'DESC')->get('guru');
        return $query->result();
    }

    public function getguruByID($id)
    {
        return $this->db->get_where('guru', ['id_guru' => $id])->row();
    }

    public function ubahdataguru()
    {
        $data = [
            "id_guru" => $this->input->post('id_guru', true),
            "nip_guru" => $this->input->post('nip_guru', true),
            "nama_guru" => $this->input->post('nama_guru', true)

        ];
        $this->db->where('id_guru', $this->input->post('id_guru'));
        $this->db->update('guru', $data);
    }
    public function getGuru()
    {
        return $this->db->get('guru')->result_array();
    }
    public function hapusguru($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('guru');
    }
}

/* End of file guru_mapel.php */
