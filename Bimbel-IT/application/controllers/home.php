<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('mapel_model');
        $this->load->model('guru_model');
        $this->load->model('murid_model');
        $this->load->model('admin_model');
        $this->load->library('form_validation');

        if ($this->session->userdata('level') != "admin") {

            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data['guru'] = $this->guru_model->getAllguru();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('home/home', $data);
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

    public function data_mapel()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data['guru'] = $this->guru_model->getAllguru();
        $data = array(
            'mapel' => $this->mapel_model->datatables()
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/data_mapel', $data);
        $this->load->view('template/footer');
    }

    public function detail_mapel($id_mapel)
    {
        $data['mapel'] = $this->mapel_model->getmapelByID($id_mapel);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_mapel', $data);
        $this->load->view('template/footer');
    }

    public function edit_mapel($id_mapel)
    {
        $data['mapel'] = $this->mapel_model->getmapelByID($id_mapel);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('kode_mapel', 'Kode_mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Nama_mapel', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/edit_mapel', $data);
            $this->load->view('template/footer');
        } else {
            $this->mapel_model->ubahdatamapel();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('home/data_mapel', 'refresh');
        }
    }

    public function detail_guru($id)
    {
        $data['guru'] = $this->guru_model->getguruByID($id);
        $data['mapel'] = $this->mapel_model->getmapelByID($id);
        $data['user'] = $this->user_model->getuserByID($id);
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/detail_guru', $data);
        $this->load->view('template/footer');
    }
    public function edit_guru($id_guru)
    {
        $data['guru'] = $this->guru_model->getguruByID($id_guru);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required');
        $this->form_validation->set_rules('nip_guru', 'nip_guru', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/edit_guru', $data);
            $this->load->view('template/footer');
        } else {
            $this->guru_model->ubahdataguru();

            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('home/data_guru', 'refresh');
        }
    }
    public function data_murid()
    {
        $data['mapel'] = $this->mapel_model->getMapel();
        $data = array(
            'murid' => $this->murid_model->getAllmurid()
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('admin/data_murid', $data);
        $this->load->view('template/footer');
    }
    public function edit_murid($id_murid)
    {
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->user_model->getUser();
        $data['murid'] = $this->murid_model->getmuridByID($id_murid);
        $this->form_validation->set_rules('nim_murid', 'nim_murid', 'required|numeric');
        $data['guru'] = $this->user_model->getAllGuru();
        $data['mapel'] = $this->user_model->getAllMapel();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->murid_model->ubahdatamurid();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('home/data_murid', 'refresh');
        }
    }
    public function tambah_guru()
    {
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data['user'] = $this->user_model->getUser();
        $this->form_validation->set_rules('nip_guru', 'Nip_guru', 'required|numeric');
        $data['guru'] = $this->user_model->getAllGuru();
        $data['mapel'] = $this->user_model->getAllMapel();

        if ($this->form_validation->run() == false) {
            #code...

            $this->load->view('template/header', $data);
            $this->load->view('admin/tambah_guru', $data);
            $this->load->view('template/footer');
        } else {
            #code...
            $this->admin_model->tambahdataguru();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('home', 'refresh');
            // echo "data berhasil ditambah";
        }
    }

    public function tambah_mapel()
    {
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode_mapel', 'Kode_mapel', 'required');
        $this->form_validation->set_rules('nama_mapel', 'Nama_mapel', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        $data['mapel'] = $this->mapel_model->getMapel();

        if ($this->form_validation->run() == false) {
            #code...

            $this->load->view('template/header', $data);
            $this->load->view('admin/tambah_mapel', $data);
            $this->load->view('template/footer');
        } else {
            #code...
            $this->admin_model->tambahdatamapel();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('home', 'refresh');
            // echo "data berhasil ditambah";
        }
    }
    public function hapusmapel($id_mapel)
    {
        $this->mapel_model->hapusmapel($id_mapel);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('home/data_mapel', 'refresh');
    }
    public function hapusguru($id_guru)
    {
        $this->guru_model->hapusguru($id_guru);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('home/data_guru', 'refresh');
    }
    public function hapusmurid($id_murid)
    {
        $this->murid_model->hapusmurid($id_murid);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('home/data_murid', 'refresh');
    }
    public function about()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('template/header');
        $this->load->view('admin/about', $data);
        $this->load->view('template/footer');
    }
}

/* End of file home.php */
