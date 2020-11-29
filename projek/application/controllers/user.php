<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('undangan_model');
        $this->load->model('cetak_model_undangan');
        $this->load->model('cetak_undangan');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    public function surat_undangan()
    {
        $data['title'] = 'Detail Surat Undangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->tampil_data_undangan()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/surat_undangan_org', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['title'] = 'Surat Undangan';
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_surat_und', 'no_surat_und', 'required|numeric');
        // $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            #code...
            $this->load->view('template/header', $data);
            $this->load->view('template/siderbar', $data);
            // $this->load->view('template/adm_topbar', $data);
            $this->load->view('user/tambah_undangan', $data);
            $this->load->view('template/footer');
        } else {
            #code...
            $this->undangan_model->tambahdataund();
            $this->session->set_flashdata('flash-data', 'ditambahkan');

            redirect('surat_undangan_org', 'refresh');
            // echo "data berhasil ditambah";
        }
    }
    public function detail($id_undang)
    {
        $data['title'] = 'Detail Surat Undangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->tampil_data_undangan()->result();
        $data['surat_undangan'] = $this->undangan_model->getundanganByID($id_undang);
        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/detail_undangan', $data);
        $this->load->view('template/footer');
    }
    public function edit($id_undang)
    {

        $data['title'] = 'Edit Surat Undangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->getundanganByID($id_undang);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_surat_und', 'no_surat_und', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/siderbar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/edit_undangan', $data);
            $this->load->view('template/footer');
        } else {
            $this->undangan_model->ubahdataund();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('surat_undangan_org', 'refresh');
        }
    }
    public function delete($id_undang)
    {
        $this->undangan_model->hapusdataund($id_undang);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('surat_undangan_org', 'refresh');
    }
}
/* End of file Controllername.php */
