<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required',[
            'required' => 'Nama wajib diisi!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required',[
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password_1', 'Password_1', 'required|matches[password_2]',[
            'required' => 'Password wajib diisi!',
            'matches' => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2', 'Password_2', 'required|matches[password_1]');

        if($this->form_validation->run() == FALSE) {
            $data['title'] = "Registrasi";
            $this->load->view('templates/header',$data);
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else {
            $password = $this->input->post('password_1', true);
            $passhash = hash('MD5', $password);
            $data = array (
                'id_user' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $passhash,
                'role_id' => 2
            );

            $this->db->insert('user', $data);

            $this->session->set_flashdata('pesan','<div class="alert alert-info alert-dismissible fade show" role="alert">
                                                Akun Berhasil di Buat!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');
            
            redirect('auth/login','refresh');
            
        }
        
    }

}

/* End of file Registrasi.php */
