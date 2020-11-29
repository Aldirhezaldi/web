<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_tambah_org extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('organisasi_model');
    }

    public function index()
    {
        $data['title'] = 'Insert Data Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_tambah_org', $data);
        $this->load->view('template/adm_footer');
    }
    public function tambah()
    {
        $data['title'] = 'Insert Data Organisasi';
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pejabat_org', 'Nama_pejabat_org', 'required');
        // $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            #code...
            $this->load->view('template/adm_header', $data);
            $this->load->view('template/adm_sidebar', $data);
            // $this->load->view('template/adm_topbar', $data);
            $this->load->view('admin/adm_tambah_org', $data);
            $this->load->view('template/adm_footer');
        } else {
            #code...
            $this->organisasi_model->tambahdataorg();
            $this->session->set_flashdata('flash-data', 'ditambahkan');

            redirect('adm_users_org', 'refresh');
            // echo "data berhasil ditambah";
        }
    }
}

/* End of file adm_tambah_pim.php */
