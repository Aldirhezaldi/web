<?php

defined('BASEPATH') or exit('No direct script access allowed');

class murid_model extends CI_Model
{

    public function getAllmurid()
    {
        $this->db->select('*');
        $this->db->from('murid mrd');
        $this->db->join('user u', 'u.id_user = mrd.id_user');
        $this->db->join('guru g', 'g.id_guru = mrd.id_guru');
        $this->db->join('mapel m', 'm.id_mapel = mrd.id_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function datatables()
    {
        $query = $this->db->order_by('id_murid', 'DESC')->get('murid');
        return $query->result();
    }

    public function getmuridByID($id_murid)
    {
        return $this->db->get_where('murid', ['id_murid' => $id_murid])->row_array();
    }
    public function ubahdatamurid()
    {
        $data = [
            "id_murid" => $this->input->post('id_murid', true),
            "id_user" => $this->input->post('id_user', true),
            "id_guru" => $this->input->post('id_guru', true),
            "id_mapel" => $this->input->post('id_mapel', true),
            "nim_murid" => $this->input->post('nim_murid', true)
        ];
        $this->db->where('id_murid', $this->input->post('id_murid'));
        $this->db->update('murid', $data);
    }
    public function hapusmurid($id_murid)
    {
        $this->db->where('id_murid', $id_murid);
        $this->db->delete('murid');
    }
    public function getMuridUser($id_user)
    {
        $user = $this->db->query("SELECT * FROM murid LEFT JOIN user ON user.id_use = murid.id_user 
                LEFT JOIN guru ON guru.id_guru = murid.id_guru LEFT JOIN mapel ON mapel.id_mapel = murid.id_mapel
                 WHERE id_user = $id_user");
    }

    /*public function ubahdatamurid()
    {
        $data = [
            "id_guru" => $this->input->post('id_guru', true),
            "nip_guru" => $this->input->post('nip_guru', true),
            "nama_guru" => $this->input->post('nama_guru', true)

        ];
        $this->db->where('id_guru', $this->input->post('id_guru'));
        $this->db->update('guru', $data);
    }*/
}

/* End of file murid_mapel.php */
