<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pem_gedung extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Peminjaman Gedung';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/pem_gedung', $data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
