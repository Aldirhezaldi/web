<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function Diamonds()
    {
        $data['title'] = 'Topup Diamond';
        $data['diamond'] = $this->model_kategori->data_diamond()->result();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('diamond',$data);
        $this->load->view('templates/footer');
    }

    public function StarlightMember()
    {
        $data['title'] = 'Topup Starlight';
        $data['starlight'] = $this->model_kategori->data_starlight()->result();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('starlight',$data);
        $this->load->view('templates/footer');
    }

    public function TwilightMember()
    {
        $data['title'] = 'Topup Twilight';
        $data['twilight'] = $this->model_kategori->data_twilight()->result();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('twilight',$data);
        $this->load->view('templates/footer');
    }

}

/* End of file Kategori.php */
