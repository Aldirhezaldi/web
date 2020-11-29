<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_det_undangan extends CI_Controller
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
        $data['title'] = 'Detail Surat Undangan Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->tampil_data_undangan()->result();

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_det_undangan', $data);
        $this->load->view('template/adm_footer');
    }

    public function delete($id_undang)
    {
        $this->undangan_model->hapusdataund($id_undang);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('adm_det_undangan', 'refresh');
    }

    public function laporan_pdf()
    {

        $this->load->library('pdf');

        $data['surat_undangan'] = $this->cetak_model_undangan->view();


        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporan_undangan', $data);
    }

    public function surat_pdf($id_undang)
    {

        $this->load->library('pdf');

        $data['surat_undangan'] = $this->cetak_undangan->view($id_undang);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/surat_undangan', $data);
    }
    public function detail($id_undang)
    {
        $data['title'] = 'Detail Surat Undangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->tampil_data_undangan()->result();
        $data['surat_undangan'] = $this->undangan_model->getundanganByID($id_undang);
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/detail_undangan', $data);
        $this->load->view('template/adm_footer');
    }
}

/* End of file adm_det_undangan.php */
