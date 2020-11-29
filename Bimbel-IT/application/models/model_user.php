<?php

class model_user extends CI_Model
{
    public function getUser($id_user = null)
    {
        if ($id_user === null) {
            return $this->db->get('user')->result_array();
        } else {
            return $this->db->get_where('user', ['id_user' => $id_user])->result_array();
        }
    }

    public function deleteUser($id_user)
    {
        $this->db->delete('user', ['id_user' => $id_user]);
        return $this->db->affected_rows();
    }

    public function createUser($data)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }

    public function updateUser($data, $id_user)
    {
        $this->db->update('user', $data, ['id_user' => $id_user]);
        return $this->db->affected_rows();
    }
}

/* End of file Mahasiswa_model.php */
