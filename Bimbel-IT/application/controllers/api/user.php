<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class user extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_user', 'user');
    }

    // GET
    function index_get()
    {
        $id_user = $this->get('id_user');
        if ($id_user === null) {
            $user = $this->user->getUser();
        } else {
            $user = $this->user->getUser($id_user);
        }
        if ($user) {
            $this->response([
                'status' => true,
                'data' => $user
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
        $id_user = $this->delete('id_user');
        if ($id_user === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->user->deleteUser($id_user) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id_user' => $id_user,
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
            'username' => $this->post('username'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'level' => $this->post('level'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'telepon' => $this->post('telepon'),
            'alamat' => $this->post('alamat'),
            'date_created' => $this->post('date_created'),
            'is_actived' => $this->post('is_actived'),
        ];

        if ($this->user->createUser($data) > 0) {
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
        $id_user = $this->put('id_user');
        $data = [
            'username' => $this->put('username'),
            'email' => $this->put('email'),
            'password' => $this->put('password'),
            'level' => $this->put('level'),
            'jenis_kelamin' => $this->put('jenis_kelamin'),
            'telepon' => $this->put('telepon'),
            'alamat' => $this->put('alamat'),
            'date_created' => $this->put('date_created'),
            'is_actived' => $this->put('is_actived'),
        ];

        if ($this->user->updateUser($data, $id_user) > 0) {
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
