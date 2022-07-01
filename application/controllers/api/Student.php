<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Student extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('api/student_model');
    }

    public function index_post(){
        echo "this is post method";
    }

    public function index_put(){
        echo "this is put method";
    }

    public function index_delete(){
        echo "this is delete method";
    }

    public function index_get(){

        $students = $this->student_model->get_students();

        if(count($students) > 0){
        $this->response(array(
                "status"=>1,
                "message"=>" Students Found",
                "data"=> $students
            ), REST_Controller :: HTTP_OK);
        }else{
            $this->response(array(
                "status"=>1,
                "message"=>" Students Found",
                "data"=> $students
            ), REST_Controller :: HTTP_OK);
        }

    }

}

?>