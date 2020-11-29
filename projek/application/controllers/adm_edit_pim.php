<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_edit_pim extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pimpinan_model');
    }

    public function index()
    {
        $data['title'] = 'Edit Data Pimpinan Polinema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_edit_pim', $data);
        $this->load->view('template/adm_footer');
    }

    public function edit($id_pimpinan)
    {

        $data['title'] = 'Edit Data Pimpinan Polinema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pimpinan_polinema'] = $this->pimpinan_model->getpimpinanByID($id_pimpinan);
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pimpinan', 'nama_pimpinan', 'required');
        $this->form_validation->set_rules('jabatan_pimpinan', 'jabatan_pimpinan', 'required');
        $this->form_validation->set_rules('email_pimpinan', 'email_pimpinan', 'required');
        $this->form_validation->set_rules('nip_pimpinan', 'nip_pimpinan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/adm_header', $data);
            $this->load->view('template/adm_sidebar', $data);
            $this->load->view('template/adm_topbar', $data);
            $this->load->view('admin/adm_edit_pim', $data);
            $this->load->view('template/adm_footer');
        } else {
            $this->pimpinan_model->ubahdatapim();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('adm_users_pim', 'refresh');
        }
    }
}

/* End of file adm_edit_pim.php */
