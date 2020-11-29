<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model_org extends CI_Model
{

    public function view()
    {

        $this->db->select('nama_org, nama_pejabat_org, email_org');
        $query = $this->db->get('organisasi');
        return $query->result();
    }
}

/* End of file cetak_model_org.php */
