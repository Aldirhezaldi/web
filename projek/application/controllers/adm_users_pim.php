<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_users_pim extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pimpinan_model');
        $this->load->model('cetak_model_pim');
    }

    public function index()
    {
        $data['title'] = 'Pimpinan Polinema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pimpinan_polinema'] = $this->pimpinan_model->tampil_data_pim()->result();

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_users_pim', $data);
        $this->load->view('template/adm_footer');
    }
    public function laporan_pdf()
    {

        $this->load->library('pdf');

        $data['pimpinan_polinema'] = $this->cetak_model_pim->view();


        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporan_pim', $data);
    }

    public function detail($id_pimpinan)
    {
        $data['title'] = 'Detail Pimpinan Polinema';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pimpinan_polinema'] = $this->pimpinan_model->tampil_data_pim()->result();
        $data['pimpinan_polinema'] = $this->pimpinan_model->getpimpinanByID($id_pimpinan);
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/detail_pimpinan', $data);
        $this->load->view('template/adm_footer');
    }

    // public function edit($id_pimpinan){
    //     $data['title']= 'Form Edit Data Mahasiswa';
    //     $data['pimpinan_polinema']=$this->pimpinan_model->getPimpinanByID($id_pimpinan);
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');

    //     if($this->form_validation->run() == FALSE){
    //         $this->load->view('template/adm_header', $data);
    //         $this->load->view('template/adm_sidebar', $data);
    //         $this->load->view('template/adm_topbar', $data);
    //         $this->load->view('admin/adm_users_pim', $data);
    //         $this->load->view('template/adm_footer');
    //     } else {
    //         $this->pimpinan_model->ubahdatapim();
    //         $this->session->set_flashdata('flash-data', 'diedit');
    //         redirect('')
    //     }

    // }

}

/* End of file adm_users.php */
