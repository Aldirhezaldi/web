<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Anda Belum Login!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');

            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Produk';
        $data['produk'] = $this->model_produk->getDataJoin();
        $data['kategori'] = $this->model_produk->tampil_data_kategori()->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataProduk', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $data['title'] = 'Data Produk';
        $data['produk'] = $this->model_produk->datatable_produk()->result();
        $data['kategori'] = $this->model_produk->tampil_data_kategori()->result();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required');
        $this->form_validation->set_rules('kategori_produk', 'Kategori_produk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dataProduk', $data);
            $this->load->view('templates_admin/footer');
        } else {
            $nama_produk = $this->input->post('nama_produk');
            $kategori_produk = $this->input->post('kategori_produk');
            $harga_produk = $this->input->post('harga_produk');
            $stok = $this->input->post('stok');
            $foto_produk = $_FILES['foto_produk']['name'];

            if ($foto_produk = '') {
            } else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto_produk')) {
                    echo "Gambar Gagal diUpload";
                } else {
                    $foto_produk = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nama_produk' => $nama_produk,
                'kategori_produk' => $kategori_produk,
                'harga_produk' => $harga_produk,
                'stok' => $stok,
                'foto_produk' => $foto_produk
            );

            $this->model_produk->tambah_produk($data, 'produk');

            redirect('admin/DataProduk', 'refresh');
        }
    }

    public function edit($id)
    {
        $where = array('id_produk' => $id);
        $data['title'] = 'Edit Produk';
        $data['produk'] = $this->db->query("select * from produk where id_produk = '$id'")->result(); //$this->model_produk->edit_produk($where, 'produk')->result();
        $data['kategori'] = $this->model_produk->tampil_data_kategori()->result(); //['Topup Diamonds', 'Starlight Member', 'Twilight Pass'];
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/editProduk', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // $this->update($id);
        } else {
            $id_produk = $this->input->post('id_produk');
            $nama_produk = $this->input->post('nama_produk');
            $kategori_produk = $this->input->post('kategori_produk');
            $harga_produk = $this->input->post('harga_produk');
            $stok = $this->input->post('stok');
            $foto_produk = $_FILES['foto_produk']['name'];

            if ($foto_produk) {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jfif';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_produk')) {
                    $userfile = $this->upload->data('file_name');
                    $this->db->set('foto_produk', $userfile);
                } else {
                    echo "Gagal Upload";
                }
            }

            $data = array(
                'nama_produk' => $nama_produk,
                'kategori_produk' => $kategori_produk,
                'harga_produk' => $harga_produk,
                'stok' => $stok
            );

            $where = array(
                'id_produk' => $id_produk
            );

            $this->model_produk->update_data($where, $data, 'produk');
            redirect('admin/DataProduk', 'refresh');
        }
    }

    public function hapus($id)
    {
        $where = array('id_produk' => $id);
        $this->model_produk->hapus_data($where, 'produk');
        redirect('admin/DataProduk', 'refresh');
    }

    public function _rules()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_produk', 'Nama_produk', 'required');
        $this->form_validation->set_rules('kategori_produk', 'Kategori_produk', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
    }

    public function detail($id_produk)
    {
        $data['title'] = 'Detail Produk';
        $data['produk'] = $this->model_produk->detail_produk($id_produk)->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_produk', $data);
        $this->load->view('templates_admin/footer');
    }
}

/* End of file DataProduk.php */
