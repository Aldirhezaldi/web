<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home_guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('mapel_model');
        $this->load->model('guru_model');
        $this->load->model('murid_model');
        $this->load->library('form_validation');

        if ($this->session->userdata('level') != "guru") {

            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data['guru'] = $this->guru_model->getAllguru();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('home/guru_home', $data);
        $this->load->view('template/footer');
    }
    public function data_murid()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data = array(
            'murid' => $this->murid_model->getAllmurid()
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('guru/data', $data);
        $this->load->view('template/footer');
    }
    public function murid_user()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data = array(
            'murid' => $this->murid_model->getAllmurid()
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('guru/data', $data);
        $this->load->view('template/footer');
    }
    public function about()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('guru/about', $data);
        $this->load->view('template/footer');
    }
}

/* End of file home_guru.php */
