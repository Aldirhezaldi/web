<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_adm extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Home BEM';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
        $this->load->view('template/adm_header', $data);
        $this->load->view('template/adm_sidebar', $data);
        $this->load->view('template/adm_topbar', $data);
        $this->load->view('admin/home_adm', $data);
        $this->load->view('template/adm_footer');
    }

}

/* End of file Controllername.php */
