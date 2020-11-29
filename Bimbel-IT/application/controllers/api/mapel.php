<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class mapel extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_mapel', 'mapel');
    }

    // GET
    function index_get()
    {
        $id_mapel = $this->get('id_mapel');
        if ($id_mapel === null) {
            $mapel = $this->mapel->getMapel();
        } else {
            $mapel = $this->mapel->getmapel($id_mapel);
        }
        if ($mapel) {
            $this->response([
                'status' => true,
                'data' => $mapel
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
        $id_mapel = $this->delete('id_mapel');
        if ($id_mapel === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->mapel->deleteMapel($id_mapel) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_mapel' => $id_mapel,
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
            'kode_mapel' => $this->post('kode_mapel'),
            'nama_mapel' => $this->post('nama_mapel'),
            'deskripsi' => $this->post('deskripsi'),
            'image' => $this->post('image'),

        ];

        if ($this->mapel->createMapel($data) > 0) {
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
        $id_mapel = $this->put('id_mapel');
        $data = [
            'kode_mapel' => $this->put('kode_mapel'),
            'nama_mapel' => $this->put('nama_mapel'),
            'deskripsi' => $this->put('deskripsi'),
            'image' => $this->put('image'),
        ];

        if ($this->mapel->updateMapel($data, $id_mapel) > 0) {
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
