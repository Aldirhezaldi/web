<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_undangan extends CI_Model
{
    public function tampil_data_undangan()
    {
        return $this->db->get('surat_undangan');
    }

    public function view($id_undang)
    {
        $this->db->select('*');
        $this->db->from('surat_undangan');
        $this->db->where('id_undang', $id_undang);
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file cetak_undangan.php */
