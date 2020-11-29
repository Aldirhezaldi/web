<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    require APPPATH . 'libraries/Format.php';

    use Restserver\Libraries\REST_Controller;

    class DataInvoice extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_invoice','invoice');
    }

    public function index_get() {
        $id = $this->get('id_invoice');
        if ($id === null) {
            $invoice = $this->invoice->getInvoice();
        }else {
            $invoice = $this->invoice->getInvoice($id);
        }

        if ($invoice) {
            $this->set_response([
                'status' => TRUE,
                'data' => $invoice
            ], REST_Controller::HTTP_OK);
        }else {
            $this->set_response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('invoice');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message'=> 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else {
            if ($this->invoice->deleteInvoice($id) > 0) {
                //ok
                $this->response([
                    'status' => TRUE,
                    'id_invoice'   => $id, 
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
            'id_mlbb' => $this->post('id_mlbb'),
            'email' => $this->post('email'),
            'tanggal_pemesanan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        ];

        if ($this->invoice->createInvoice($data)) {
            $this->response([
                'status' => TRUE,
                'message'=> 'new invoice has been created'
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
        $id = $this->put('id_invoice');
        $data = [
            'id_mlbb' => $this->put('id_mlbb'),
            'email' => $this->post('email'),
            'tanggal_pesanan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        ];

        if ($this->invoice->updateInvoice($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message'=> 'data invoice has been updated'
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
/* End of file DataInvoice.php */