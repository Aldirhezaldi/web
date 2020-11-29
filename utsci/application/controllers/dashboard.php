<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                Anda Belum Login!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>');

            redirect('auth/login', 'refresh');
        }
    }

    public function tambah_ke_keranjang($id)
    {
        $produk = $this->model_produk->find($id);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga_produk,
            'name'    => $produk->nama_produk
        );

        $this->cart->insert($data);
        redirect('base', 'refresh');
    }

    public function detail_keranjang()
    {
        $data['title'] = 'Keranjang Belanja';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();

        redirect('base', 'refresh');
    }

    public function pembayaran()
    {
        $data['title'] = 'Pembayaran';
        $data['bank'] = $this->model_produk->get_bank()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $data['title'] = 'Proses Pesanan';
        $is_prosseced = $this->model_invoice->index();
        if ($is_prosseced) {
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf Pesanan Anda Gagal di Proses";
        }
    }

    public function detail($id_produk)
    {
        $data['title'] = 'Detail Produk';
        $data['produk'] = $this->model_produk->detail_produk($id_produk)->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('detail_produk', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard.php */
