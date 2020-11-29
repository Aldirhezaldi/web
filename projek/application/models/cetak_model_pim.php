<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model_pim extends CI_Model
{

    public function view()
    {

        $this->db->select('nama_pimpinan, jabatan_pimpinan, email_pimpinan');
        $query = $this->db->get('pimpinan_polinema');
        return $query->result();
    }
}

/* End of file cetak_model.php */
