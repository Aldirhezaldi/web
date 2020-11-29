<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

        if ($this->session->userdata('level') != "admin") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('profile/admin_profile', $data);
        $this->load->view('template/footer');
    }
}


/* End of file home_user.php */
