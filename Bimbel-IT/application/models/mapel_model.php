<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mapel_model extends CI_Model
{

    public function getMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function datatables()
    {
        $query = $this->db->order_by('id_mapel', 'DESC')->get('mapel');
        return $query->result();
    }

    public function getmapelByID($id)
    {
        return $this->db->get_where('mapel', ['id_mapel' => $id])->row();
    }
    public function getmapelByNamaa($nama_mapel)
    {
        return $this->db->get_where('mapel', ['nama_mapel' => $nama_mapel])->row_array();
    }
    public function getmapelBydes($deskripsi)
    {
        return $this->db->get_where('mapel', ['deskripsi' => $deskripsi])->row_array();
    }

    public function ubahdatamapel()
    {
        $data = [
            "kode_mapel" => $this->input->post('kode_mapel', true),
            "nama_mapel" => $this->input->post('nama_mapel', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];
        $this->db->where('id_mapel', $this->input->post('id_mapel'));
        $this->db->update('mapel', $data);
    }
    public function hapusmapel($id_mapel)
    {
        $this->db->where('id_mapel', $id_mapel);
        $this->db->delete('mapel');
    }
}

/* End of file mapel_model.php */
