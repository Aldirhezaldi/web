<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class adm_del_pim extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('pimpinan_model');
        
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

    public function delete($id_pimpinan){
        $this->pimpinan_model->hapusdatapim($id_pimpinan);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('adm_users_pim','refresh');
    }

}

/* End of file adm_del_pim.php */
