<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->load->view('template/login_header');
        $this->load->view('login/login');
        $this->load->view('template/login_footer');
    }

    public function proses_login()
    {

        $username = htmlspecialchars($this->input->post('uname1'));
        $password = htmlspecialchars($this->input->post('pwd1'));

        $ceklogin = $this->login_model->login($username, $password);

        if ($ceklogin) {

            foreach ($ceklogin as $row);
            // kita set userdata pada session dengan nama user dan isi username kita isikan username yg ada pada $row
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('level', $row->level);
            // var_dump($row);
            if ($this->session->userdata('level') == "admin") {

                redirect('home/index');
            } elseif ($this->session->userdata('level') == "user") {
                redirect("home_user/index");
            } elseif ($this->session->userdata('level') == "guru") {
                redirect("home_guru/index");
            }
        } else {
            $data['pesan'] = "username dan passwrod anda salah";
            $data['title'] = 'Login';
            $this->load->view('template/login_header', $data);
            $this->load->view('login/login', $data);
            $this->load->view('template/login_footer');

            // redirect('login/index','refresh');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[2]', [
            'min_length' => 'password too short!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('template/login_header');
            $this->load->view('login/registrasi');
            $this->load->view('template/login_footer');
        } else {
            $data = [
                'username' => $this->input->post('username', true),
                'telepon' => $this->input->post('telepon', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'alamat' => $this->input->post('alamat', true),
                'password' => $this->input->post('password', true),
                'level' => $this->input->post('level', true),
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
            Congratulation!! your account has been created!!! </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}

/* End of file login.php */
// public function proses_login()
//     {

//         $username = htmlspecialchars($this->input->post('uname1'));
//         $password = htmlspecialchars($this->input->post('pwd1'));

//         $ceklogin = $this->login_model->login($username, $password);

//         if ($ceklogin) {

//             foreach ($ceklogin as $row);
//             // kita set userdata pada session dengan nama user dan isi username kita isikan username yg ada pada $row
//             $this->session->set_userdata('username', $row->username);
//             $this->session->set_userdata('level', $row->level);
//             // var_dump($row);
//             if ($this->session->userdata('level') == "admin") {

//                 redirect('home/index');
//             } elseif ($this->session->userdata('level') == "user") {
//                 redirect("home_user/index");
//             } elseif ($this->session->userdata('level') == "guru") {
//                 redirect("home_guru/index");
//             }
//         } else {
//             $data['pesan'] = "username dan passwrod anda salah";
//             $data['title'] = 'Login';
//             $this->load->view('template/login_header', $data);
//             $this->load->view('login/login', $data);
//             $this->load->view('template/login_footer');

//             // redirect('login/index','refresh');
//         }
