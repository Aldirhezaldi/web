<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class guru extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_guru', 'guru');
    }

    // GET
    function index_get()
    {
        $id_guru = $this->get('id_guru');
        if ($id_guru === null) {
            $guru = $this->guru->getGuru();
        } else {
            $guru = $this->guru->getGuru($id_guru);
        }
        if ($guru) {
            $this->response([
                'status' => true,
                'data' => $guru
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
        $id_guru = $this->delete('id_guru');
        if ($id_guru === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->guru->deleteGuru($id_guru) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_guru' => $id_guru,
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
            'id_mapel' => $this->post('id_mapel'),
            'nip_guru' => $this->post('nip_guru'),
            'nama_guru' => $this->post('nama_guru'),
            'images' => $this->post('images'),

        ];

        if ($this->guru->createGuru($data) > 0) {
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
        $id_guru = $this->put('id_guru');
        $data = [
            'id_user' => $this->put('id_user'),
            'id_mapel' => $this->put('id_mapel'),
            'nip_guru' => $this->put('nip_guru'),
            'nama_guru' => $this->put('nama_guru'),
            'images' => $this->put('images'),
        ];

        if ($this->guru->updateGuru($data, $id_guru) > 0) {
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
