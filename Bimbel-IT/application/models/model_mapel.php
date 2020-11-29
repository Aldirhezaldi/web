<?php

class model_mapel extends CI_Model
{
    public function getMapel($id_mapel = null)
    {
        if ($id_mapel === null) {
            return $this->db->get('mapel')->result_array();
        } else {
            return $this->db->get_where('mapel', ['id_mapel' => $id_mapel])->result_array();
        }
    }

    public function deleteMapel($id_mapel)
    {
        $this->db->delete('mapel', ['id_mapel' => $id_mapel]);
        return $this->db->affected_rows();
    }

    public function createMapel($data)
    {
        $this->db->insert('mapel', $data);
        return $this->db->affected_rows();
    }

    public function updateMapel($data, $id_mapel)
    {
        $this->db->update('mapel', $data, ['id_mapel' => $id_mapel]);
        return $this->db->affected_rows();
    }
}

/* End of file Mahasiswa_model.php */
