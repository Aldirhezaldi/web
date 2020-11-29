<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('movie/index');
        $this->load->view('template/footer');
    }

}

/* End of file Movie.php */
