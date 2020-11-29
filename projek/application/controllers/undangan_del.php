<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class undangan_del extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('undangan_model');
        
    }

    public function index()
    {
        $data['title'] = 'Surat Undangan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['surat_undangan'] = $this->undangan_model->tampil_data_undangan()->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/siderbar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/surat_undangan_org', $data);
        $this->load->view('template/footer');
    }

    public function delete($id_undang){
        $this->undangan_model->hapusdataund($id_undang);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('surat_undangan_org','refresh');
    }

}

/* End of file undangan_del.php */
