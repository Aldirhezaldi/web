<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pem_transportasi extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Peminjaman Transportasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/pem_transportasi', $data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
