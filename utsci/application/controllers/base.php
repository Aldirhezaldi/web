<?php

defined('BASEPATH') or exit('No direct script access allowed');

class base extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'FIS Store';
        $data['produk'] = $this->model_produk->getDataJoin();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file base.php */
