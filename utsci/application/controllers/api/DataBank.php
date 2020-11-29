<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    require APPPATH . 'libraries/Format.php';

    use Restserver\Libraries\REST_Controller;

    class DataBank extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Bank_model','bank');
    }

    public function index_get() {
        $id = $this->get('id_bank');
        if ($id === null) {
            $bank = $this->bank->getBank();
        }else {
            $bank = $this->bank->getBank($id);
        }

        if ($bank) {
            $this->set_response([
                'status' => TRUE,
                'data' => $bank
            ], REST_Controller::HTTP_OK);
        }else {
            $this->set_response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('bank');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message'=> 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else {
            if ($this->bank->deleteBank($id) > 0) {
                //ok
                $this->response([
                    'status' => TRUE,
                    'id_bank'   => $id, 
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
            'nama_bank' => $this->post('nama_bank'),
            'nomer_rekening' => $this->post('nomer_rekening')
        ];

        if ($this->bank->createBank($data)) {
            $this->response([
                'status' => TRUE,
                'message'=> 'new bank has been created'
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
        $id = $this->put('id_bank');
        $data = [
            'nama_bank' => $this->put('nama_bank'),
            'nomer_rekening' => $this->put('nomer_rekening')
        ];

        if ($this->bank->updateBank($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message'=> 'data bank has been updated'
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
/** End of file DataBank.php **/