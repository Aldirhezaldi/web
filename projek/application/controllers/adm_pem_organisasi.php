<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adm_pem_organisasi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('peminjaman_model');
    }

    // public function tambah()
    // {
    //     $this->load->helper(array('form', 'url'));
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('no_srt_pjm', 'no_srt_pjm', 'required');
    //     $this->form_validation->set_rules('kegiatan_pjm', 'kegiatan_pjm', 'required');
        
    //     if($this->form_validation->run() == false){
    //         #code...
    //         $this->load->view('template/header', $data);
    //     $this->load->view('template/siderbar', $data);
    //     $this->load->view('template/topbar', $data);
    //     $this->load->view('user/pem_organisasi', $data);
    //     $this->load->view('template/footer');
    //     }
    //     else{
    //         #code...
    //         $this->peminjaman_model->tambahdatapjm();
    //         $this->session->set_flashdata('flash-data', 'ditambahkan');
            
    //         redirect('home', 'refresh');
    //         // echo "data berhasil ditambah";
    //     }  
    // }
    public function index()
    {
        $data['title'] = 'Peminjaman Organisasi Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/adm_pem_organisasi', $data);
        $this->load->view('template/adm_footer');
    }

}

/* End of file Controllername.php */
