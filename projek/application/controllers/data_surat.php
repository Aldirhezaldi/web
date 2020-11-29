<?php

defined('BASEPATH') or exit('No direct script access allowed');

class data_surat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peminjaman_model');
        $this->load->model('cetak_peminjaman');
    }
    public function index()
    {
        $data['title'] = 'Detail Peminjaman Surat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_peminjaman'] = $this->peminjaman_model->getAllpeminjaman()->result();


        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/data_surat', $data);
        $this->load->view('template/footer');
    }
    public function detail($id_pinjam)
    {
        $data['title'] = 'Detail Surat Peminjaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_peminjaman'] = $this->peminjaman_model->getAllpeminjaman()->result();
        $data['surat_peminjaman'] = $this->peminjaman_model->getpeminjamanByID($id_pinjam);
        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/detail_surat_pem', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Controllername.php */
