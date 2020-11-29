<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    require APPPATH . 'libraries/Format.php';

    use Restserver\Libraries\REST_Controller;

    class DataProduk extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Produk_model','produk');
    }

    public function index_get() {
        $id = $this->get('id');
        if ($id === null) {
            $produk = $this->produk->getProduk();
        }else {
            $produk = $this->produk->getProduk($id);
        }

        if ($produk) {
            $this->set_response([
                'status' => TRUE,
                'data' => $produk
            ], REST_Controller::HTTP_OK);
        }else {
            $this->set_response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('id_produk');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message'=> 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else {
            if ($this->produk->deleteProduk($id) > 0) {
                //ok
                $this->response([
                    'status' => TRUE,
                    'id'   => $id, 
                    'message'=> 'deleted'
                ], REST_Controller::HTTP_OK);
            }else {
                //id not found
                $this->response([
                    'status' => FALSE,
                    'message'=> 'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nama_produk' => $this->post('nama_produk'),
            //Isi Kategori : Topup Diamonds, Starlight Member, Twilight Pass
            'kategori_produk' => $this->post('kategori_produk'),
            'harga_produk' => $this->post('harga_produk'),
            'stok' => $this->post('stok'),
            'foto_produk' => $this->post('foto_produk')
        ];

        if ($this->produk->createProduk($data)) {
            $this->response([
                'status' => TRUE,
                'message'=> 'new produk has been created'
            ], REST_Controller::HTTP_CREATED);
        }else {
            // id not found
            $this->response([
                'status' => FALSE,
                'message'=> 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id_produk');
        $data = [
            'nama_produk' => $this->put('nama_produk'),
            //Isi Kategori : Topup Diamonds, Starlight Member, Twilight Pass
            'kategori_produk' => $this->put('kategori_produk'),
            'harga_produk' => $this->put('harga_produk'),
            'stok' => $this->put('stok'),
            'foto_produk' => $this->put('foto_produk')
        ];

        if ($this->produk->updateProduk($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message'=> 'data produk has been updated'
            ], REST_Controller::HTTP_OK);
        }else {
            // id not found
            $this->response([
                'status' => FALSE,
                'message'=> 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
/** End of file DataProduk.php **/