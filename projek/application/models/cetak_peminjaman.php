<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_peminjaman extends CI_Model
{

    public function view($id_pinjam)
    {

        $this->db->select('*');
        $this->db->from('surat_peminjaman');
        $this->db->where('id_pinjam', $id_pinjam);
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file cetak_peminjaman.php */
