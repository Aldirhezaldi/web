<?php

class model_guru extends CI_Model
{
    public function getGuru($id_guru = null)
    {
        if ($id_guru === null) {
            return $this->db->get('guru')->result_array();
        } else {
            return $this->db->get_where('guru', ['id_guru' => $id_guru])->result_array();
        }
    }

    public function deleteGuru($id_guru)
    {
        $this->db->delete('guru', ['id_guru' => $id_guru]);
        return $this->db->affected_rows();
    }

    public function createGuru($data)
    {
        $this->db->insert('guru', $data);
        return $this->db->affected_rows();
    }

    public function updateGuru($data, $id_guru)
    {
        $this->db->update('guru', $data, ['id_guru' => $id_guru]);
        return $this->db->affected_rows();
    }
}

/* End of file Mahasiswa_model.php */
