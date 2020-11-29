<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home_pim extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('undangan_model');
        $this->load->model('cetak_model_undangan');
        $this->load->model('cetak_undangan');
        $this->load->model('user_model');
        $this->load->model('pimpinan_model');
        $this->load->model('cetak_model_pim');
        $this->load->model('peminjaman_model');
        $this->load->model('cetak_peminjaman');
    }

    public function index()
    {
        $data['title'] = 'Home Pimpinan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/pim_header', $data);
        $this->load->view('template/pim_sidebar', $data);
        $this->load->view('template/pim_topbar', $data);
        $this->load->view('pimpinan/home', $data);
        $this->load->view('template/pim_footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/pim_header', $data);
        $this->load->view('template/pim_sidebar', $data);
        $this->load->view('template/pim_topbar', $data);
        $this->load->view('pimpinan/profile', $data);
        $this->load->view('template/pim_footer');
    }

    public function user()
    {
        $data['title'] = 'User Pimpinan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pimpinan_polinema'] = $this->pimpinan_model->tampil_data_pim()->result();

        $this->load->view('template/pim_header', $data);
        $this->load->view('template/pim_sidebar', $data);
        $this->load->view('template/pim_topbar', $data);
        $this->load->view('pimpinan/user', $data);
        $this->load->view('template/pim_footer');
    }

    public function laporan_pdf()
    {

        $this->load->library('pdf');

        $data['pimpinan_polinema'] = $this->cetak_model_pim->view();


        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporan_pim', $data);
    }

    public function dis_su()
    {
        $data['title'] = 'Disposisi Surat Undangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->tampil_data_undangan()->result();

        $this->load->view('template/pim_header', $data);
        $this->load->view('template/pim_sidebar', $data);
        $this->load->view('template/pim_topbar', $data);
        $this->load->view('pimpinan/dis_su', $data);
        $this->load->view('template/pim_footer');
    }

    public function dis_sp()
    {
        $data['title'] = 'Disposisi Surat Peminjaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_peminjaman'] = $this->peminjaman_model->getAllpeminjaman()->result();

        $this->load->view('template/pim_header', $data);
        $this->load->view('template/pim_sidebar', $data);
        $this->load->view('template/pim_topbar', $data);
        $this->load->view('pimpinan/dis_sp', $data);
        $this->load->view('template/pim_footer');
    }

    public function disposisi_su($id_undang)
    {

        $this->load->library('pdf');

        $data['surat_undangan'] = $this->cetak_undangan->view($id_undang);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('pimpinan/disposisi_undangan', $data);
    }

    public function disposisi_sp($id_pinjam)
    {
        $this->load->library('pdf');
        $data['surat_peminjaman'] = $this->cetak_peminjaman->view($id_pinjam);
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('pimpinan/disposisi_peminjaman', $data);
    }
}

/* End of file Controllername.php */
