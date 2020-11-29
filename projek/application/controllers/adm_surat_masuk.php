<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adm_surat_masuk extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Surat Masuk Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_surat_masuk', $data);
        $this->load->view('template/adm_footer');
    }

}

/* End of file adm_surat_masuk.php */
