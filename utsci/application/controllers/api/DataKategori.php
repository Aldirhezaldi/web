<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    require APPPATH . 'libraries/Format.php';

    use Restserver\Libraries\REST_Controller;

    class DataKategori extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_kategori','kategori');
    }

    public function index_get() {
        $id = $this->get('id_kategori');
        if ($id === null) {
            $kategori = $this->kategori->getKategori();
        }else {
            $kategori = $this->kategori->getKategori($id);
        }

        if ($kategori) {
            $this->set_response([
                'status' => TRUE,
                'data' => $kategori
            ], REST_Controller::HTTP_OK);
        }else {
            $this->set_response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('id_kategori');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message'=> 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else {
            if ($this->kategori->deleteKategori($id) > 0) {
                //ok
                $this->response([
                    'status' => TRUE,
                    'id_kategori'   => $id, 
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
            'nama_kategori' => $this->post('nama_kategori'),
            'foto_kategori' => $this->post('foto_kategori')
        ];

        if ($this->kategori->createKategori($data)) {
            $this->response([
                'status' => TRUE,
                'message'=> 'new kategori has been created'
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
        $id = $this->put('id_kategori');
        $data = [
            'nama_kategori' => $this->put('nama_kategori'),
            'foto_kategori' => $this->put('foto_kategori')
        ];

        if ($this->kategori->updateKategori($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message'=> 'data kategori has been updated'
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
/* End of file DataBank.php */