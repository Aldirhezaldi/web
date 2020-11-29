<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_users_org extends CI_Controller
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

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_users_org', $data);
        $this->load->view('template/adm_footer');
    }

    public function laporan_pdf()
    {

        $this->load->library('pdf');

        $data['organisasi'] = $this->cetak_model_org->view();


        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporan_org', $data);
    }

    public function detail($id_organisasi)
    {
        $data['title'] = 'Detail Organisasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['organisasi'] = $this->organisasi_model->tampil_data_org()->result();
        $data['organisasi'] = $this->organisasi_model->getorganisasiByID($id_organisasi);
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/detail_organisasi', $data);
        $this->load->view('template/adm_footer');
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
            $this->load->view('template/adm_header', $data);
            $this->load->view('template/adm_sidebar', $data);
            $this->load->view('template/adm_topbar', $data);
            $this->load->view('admin/adm_edit_org', $data);
            $this->load->view('template/adm_footer');
        } else {
            $this->organisasi_model->ubahdataorg();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('adm_users_org', 'refresh');
        }
    }
}

/* End of file adm_users.php */
