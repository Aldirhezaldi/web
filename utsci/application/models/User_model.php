<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getUser($id = null)
    {
        if ($id === null) {
            return $this->db->get('user')->result_array();
        }else {
            return $this->db->get_where('user', ['id_user' => $id])->result_array();
        }
    }

    public function deleteUser($id)
    {
        $this->db->delete('user',['id_user' => $id]);
        return $this->db->affected_rows();
    }

    public function createUser($data)
    {
        $this->db->insert('user',$data);
        return $this->db->affected_rows();
    }

    public function updateUser($data, $id)
    {
        $this->db->update('user',$data, ['id_user' => $id]);
        return $this->db->affected_rows();
    }

}

/* End of file User_model.php */
