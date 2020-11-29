<?php

defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() ==  FALSE) {
            $data['title'] = 'Login Page';
            $this->load->view('template/auth_header', $data);
            $this->load->view('template/auth_footer');
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    public function pilih_regris()
    {
        $data['title'] = 'Pilih Registrasi';
        $this->load->view('template/auth_header', $data);
        $this->load->view('template/auth_footer');
        $this->load->view('auth/pilih_regris');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 1) {
                        redirect('home_adm');
                    }
                    if ($user['level'] == 2) {
                        redirect('home');
                    } else {
                        redirect('home_pim');
                    }
                    redirect('auth');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password !!!  </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This email has not been activated!!!  </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!!! </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[2]|matches[password2]', [
            'matches' => 'password dont matches!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Registration';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');;
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'level' => $this->input->post('level', true),
                'image' => 'default.jpg',
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
            Congratulation!! your account has been created!!! </div>');
            redirect('auth');
        }
    }

    public function registration_pim()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[2]|matches[password2]', [
            'matches' => 'password dont matches!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Registration';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');;
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'level' => $this->input->post('level', true),
                'image' => 'default.jpg',
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
            Congratulation!! your account has been created!!! </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout!!!  </div>');
        redirect('auth');
    }
}

/* Eauthp */
