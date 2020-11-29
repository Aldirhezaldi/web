<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model_undangan extends CI_Model
{

    public function view()
    {

        $this->db->select('no_surat_und, tgl_buat_srt_und, tema_und, tanggal_und');
        $query = $this->db->get('surat_undangan');
        return $query->result();
    }
}

/* End of file cetak_model_undangan.php */
