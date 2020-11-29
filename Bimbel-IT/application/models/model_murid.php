<?php

class model_murid extends CI_Model
{
    public function getmurid($id_murid = null)
    {
        if ($id_murid === null) {
            return $this->db->get('murid')->result_array();
        } else {
            return $this->db->get_where('murid', ['id_murid' => $id_murid])->result_array();
        }
    }

    public function deletemurid($id_murid)
    {
        $this->db->delete('murid', ['id_murid' => $id_murid]);
        return $this->db->affected_rows();
    }

    public function createmurid($data)
    {
        $this->db->insert('murid', $data);
        return $this->db->affected_rows();
    }

    public function updatemurid($data, $id_murid)
    {
        $this->db->update('murid', $data, ['id_murid' => $id_murid]);
        return $this->db->affected_rows();
    }
}

/* End of file Mahasiswa_model.php */
