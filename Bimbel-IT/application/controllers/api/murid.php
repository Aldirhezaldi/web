<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class murid extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_murid', 'murid');
    }

    // GET
    function index_get()
    {
        $id_murid = $this->get('id_murid');
        if ($id_murid === null) {
            $murid = $this->murid->getmurid();
        } else {
            $murid = $this->murid->getmurid($id_murid);
        }
        if ($murid) {
            $this->response([
                'status' => true,
                'data' => $murid
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    // DELETE
    function index_delete()
    {
        $id_murid = $this->delete('id_murid');
        if ($id_murid === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->murid->deletemurid($id_murid) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_murid' => $id_murid,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'provide an id!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    // POST
    public function index_post()
    {
        $data = [
            'id_user' => $this->post('id_user'),
            'id_guru' => $this->post('id_guru'),
            'id_mapel' => $this->post('id_mapel'),
            'nim_murid' => $this->post('nim_murid'),


        ];

        if ($this->murid->createmurid($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new mahasiswa has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }


    // PUT
    public function index_put()
    {
        $id_murid = $this->put('id_murid');
        $data = [
            'id_user' => $this->put('id_user'),
            'id_guru' => $this->put('id_guru'),
            'id_mapel' => $this->put('id_mapel'),
            'nim_murid' => $this->put('nim_murid'),
        ];

        if ($this->murid->updatemurid($data, $id_murid) > 0) {
            $this->response([
                'status' => true,
                'message' => 'data mahasiswa has been updated'
            ], REST_Controller::HTTP_OK);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}


/* End of file Controllername.php */
