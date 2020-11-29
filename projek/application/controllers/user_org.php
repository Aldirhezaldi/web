<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_org extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('organisasi_model');
        $this->load->model('cetak_model_org');
    }

    public function index()
    {
        $data['title'] = 'Data User Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['organisasi'] = $this->organisasi_model->tampil_data_org()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/anggota', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Insert Data Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/user_tambah_org', $data);
        $this->load->view('template/footer');
    }
    public function insert()
    {
        $data['title'] = 'Insert Data Organisasi';
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pejabat_org', 'Nama_pejabat_org', 'required');
        // $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            // $this->load->view('template/adm_topbar', $data);
            $this->load->view('user/user_tambah_org', $data);
            $this->load->view('template/footer');
        } else {
            #code...
            $this->organisasi_model->tambahdataorg();
            $this->session->set_flashdata('flash-data', 'ditambahkan');

            redirect('user_org', 'refresh');
            // echo "data berhasil ditambah";
        }
    }
    public function detail($id_organisasi)
    {
        $data['title'] = 'Detail Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['organisasi'] = $this->organisasi_model->tampil_data_org()->result();
        $data['organisasi'] = $this->organisasi_model->getorganisasiByID($id_organisasi);
        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/detail_organisasi', $data);
        $this->load->view('template/footer');
    }

    public function edit($id_organisasi)
    {

        $data['title'] = 'Edit Data Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['organisasi'] = $this->organisasi_model->getorganisasiByID($id_organisasi);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_induk_pejabat', 'no_induk_pejabat', 'required');
        $this->form_validation->set_rules('nama_org', 'nama_org', 'required');
        $this->form_validation->set_rules('jabatan_org', 'jabatan_org', 'required');
        $this->form_validation->set_rules('nama_pejabat_org', 'nama_pejabat_org', 'required');
        $this->form_validation->set_rules('email_org', 'email_org', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/siderbar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/edit_org', $data);
            $this->load->view('template/footer');
        } else {
            $this->organisasi_model->ubahdataorg();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('user_org', 'refresh');
        }
    }
    public function delete($id_organisasi)
    {
        $this->organisasi_model->hapusdataorg($id_organisasi);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('user_org', 'refresh');
    }
}

/* End of file user_org.php */
