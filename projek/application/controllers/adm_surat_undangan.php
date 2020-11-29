<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_surat_undangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('undangan_model');
    }

    public function index()
    {
        $data['title'] = 'Surat Undangan Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_surat_undangan', $data);
        $this->load->view('template/adm_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Surat Undangan Admin';
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_surat_und', 'no_surat_und', 'required|numeric');
        // $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            #code...
            $this->load->view('template/adm_header', $data);
            $this->load->view('template/adm_sidebar', $data);
            // $this->load->view('template/adm_topbar', $data);
            $this->load->view('admin/adm_surat_undangan', $data);
            $this->load->view('template/adm_footer');
        } else {
            #code...
            $this->undangan_model->tambahdataund();
            $this->session->set_flashdata('flash-data', 'ditambahkan');

            redirect('adm_surat_undangan', 'refresh');
            // echo "data berhasil ditambah";
        }
    }
}

/* End of file adm_surat_undangan.php */
