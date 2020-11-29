<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adm_del_org extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('organisasi_model');
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

    public function delete($id_organisasi){
        $this->organisasi_model->hapusdataorg($id_organisasi);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('adm_users_org','refresh');
    }

}

/* End of file adm_del_org.php */
