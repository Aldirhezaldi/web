<?php

defined('BASEPATH') or exit('No direct script access allowed');

class guru_profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        if ($this->session->userdata('level') != "guru") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('profile/guru_profile', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Controllername.php */
