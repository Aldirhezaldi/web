<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('mapel_model');
        $this->load->model('guru_model');
        $this->load->model('murid_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != "user") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data['guru'] = $this->guru_model->getAllguru();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('home/user_home', $data);
        $this->load->view('template/footer');
    }

    public function data_guru()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data = array(
            'guru' => $this->guru_model->getAllguru()
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/data_guru', $data);
        $this->load->view('template/footer');
    }

    public function pendaftaran()
    {
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data['user'] = $this->user_model->getUser();
        $this->form_validation->set_rules('nim_murid', 'Nim_murid', 'required|numeric');
        $data['guru'] = $this->user_model->getAllGuru();
        $data['mapel'] = $this->user_model->getAllMapel();

        if ($this->form_validation->run() == false) {
            #code...

            $this->load->view('template/header', $data);
            $this->load->view('user/pendaftaran', $data);
            $this->load->view('template/footer');
        } else {
            #code...
            $this->user_model->tambahdatamurid();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('home_user/data', 'refresh');
            // echo "data berhasil ditambah";
        }
    }
    public function edit_murid($id_murid)
    {
        $data['murid'] = $this->murid_model->getmuridByID($id_murid);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('kode_mapel', 'Kode_mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Nama_mapel', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->mapel_model->ubahdatamapel();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('home/data_mapel', 'refresh');
        }
    }
    public function data()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data = array(
            'murid' => $this->murid_model->getAllmurid()
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('user/data', $data);
        $this->load->view('template/footer');
    }

    public function about()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('user/about', $data);
        $this->load->view('template/footer');
    }
}

/* End of file home_user.php */
