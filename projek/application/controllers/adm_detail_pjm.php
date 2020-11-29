<?php

defined('BASEPATH') or exit('No direct script access allowed');

class adm_detail_pjm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
        $this->load->model('cetak_peminjaman');
    }

    public function index()
    {
        $data['title'] = 'Detail Surat Peminjaman Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_peminjaman'] = $this->peminjaman_model->getAllpeminjaman()->result();

        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_detail_pjm', $data);
        $this->load->view('template/adm_footer');
    }
    public function delete($id_pinjam)
    {
        $this->peminjaman_model->hapusdatapjm($id_pinjam);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('adm_detail_pjm', 'refresh');
    }

    public function laporan_pdf()
    {

        $this->load->library('pdf');

        $data['surat_peminjaman'] = $this->peminjaman_model->view();


        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporan_peminjaman', $data);
    }

    public function surat_pdf($id_pinjam)
    {
        $this->load->library('pdf');
        $data['surat_peminjaman'] = $this->cetak_peminjaman->view($id_pinjam);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/surat_peminjaman', $data);
    }

    public function detail($id_pinjam)
    {
        $data['title'] = 'Detail Surat Peminjaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_peminjaman'] = $this->peminjaman_model->getAllpeminjaman()->result();
        $data['surat_peminjaman'] = $this->peminjaman_model->getpeminjamanByID($id_pinjam);
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/detail_peminjaman', $data);
        $this->load->view('template/adm_footer');
    }
}

/* End of file adm_detail_pjm.php */
