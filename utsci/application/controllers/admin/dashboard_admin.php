<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Anda Belum Login!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
            
            redirect('auth/login','refresh');
            
        }
    }
    

    public function index()
    {
        $data = $this->model_auth->ambil_data($this->session->userdata['username']);
        $data = array (
            'username' => $data->username,
            'nama' => $data->nama
        );

        $data['title'] = 'Halaman Admin';
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
        
    }

}

/* End of file dashboard_admin.php */
