<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    require APPPATH . 'libraries/Format.php';

    use Restserver\Libraries\REST_Controller;

    class DataUser extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model','user');
    }

    public function index_get() {
        $id = $this->get('id_user');
        if ($id === null) {
            $user = $this->user->getUser();
        }else {
            $user = $this->user->getUser($id);
        }

        if ($user) {
            $this->set_response([
                'status' => TRUE,
                'data' => $user
            ], REST_Controller::HTTP_OK);
        }else {
            $this->set_response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() {
        $id = $this->delete('id_user');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message'=> 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else {
            if ($this->user->deleteUser($id) > 0) {
                //ok
                $this->response([
                    'status' => TRUE,
                    'id_user'   => $id, 
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
        $password = $this->post('password');
        $passhash = hash('MD5', $password);
        $data = [
            'nama' => $this->post('nama'),
            'username' => $this->post('username'),
            'password' => $passhash,
            // Role ID : Admin = 1 , User = 2
            'role_id' => $this->post('role_id')
        ];

        if ($this->user->createUser($data)) {
            $this->response([
                'status' => TRUE,
                'message'=> 'new user has been created'
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
        $password = $this->put('password');
        $passhash = hash('MD5', $password);
        $id = $this->put('id_user');
        $data = [
            'nama' => $this->put('nama'),
            'username' => $this->put('username'),
            'password' => $passhash,
            // Role ID : Admin = 1 , User = 2
            'role_id' => $this->put('role_id')
        ];

        if ($this->user->updateUser($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message'=> 'data user has been updated'
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
/** End of file DataUser.php **/