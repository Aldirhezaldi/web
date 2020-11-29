<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bank_model extends CI_Model
{

    public function getBank($id = null)
    {
        if ($id === null) {
            return $this->db->get('bank')->result_array();
        } else {
            return $this->db->get_where('bank', ['id_bank' => $id])->result_array();
        }
    }
    public function tambah_bank($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tampil_bank()
    {
        return $this->db->get('bank')->result();
    }

    public function deleteBank($id)
    {
        $this->db->delete('bank', ['id_bank' => $id]);
        return $this->db->affected_rows();
    }

    public function createBank($data)
    {
        $this->db->insert('bank', $data);
        return $this->db->affected_rows();
    }

    public function updateBank($data, $id)
    {
        $this->db->update('bank', $data, ['id_bank' => $id]);
        return $this->db->affected_rows();
    }

    public function datatable_bank()
    {
        return $this->db->order_by('id_bank', 'DESC')->get('bank');
    }
}

/* End of file Bank_model.php */
