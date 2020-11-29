<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bank_model');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Anda Belum Login!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');

            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $this->load->model('Bank_model');
        $data['title'] = "Data Bank";
        $data['bank'] = $this->Bank_model->tampil_bank();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/Bank', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $data['title'] = 'Data Bank';
        $data['bank'] = $this->Bank_model->datatable_bank()->result();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_bank', 'Nama_bank', 'required');
        $this->form_validation->set_rules('nomer_rekening', 'Nomer_rekening', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/Bank', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $nama_bank = $this->input->post('nama_bank');
            $nomer_rekening = $this->input->post('nomer_rekening');

            $data = array(
                'nama_bank' => $nama_bank,
                'nomer_rekening' => $nomer_rekening
            );

            $this->Bank_model->tambah_bank($data, 'bank');

            redirect('admin/dashboard_admin', 'refresh');
        }
    }
}

/* End of file Bank.php */
