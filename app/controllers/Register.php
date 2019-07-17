<?php

class Register extends Controller {
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/css', $data);
        $this->view('register/index');
        $this->view('templates/script');
    }

    public function userAdd()
    {
        if( $this->model('Register_model')->insertUser($_POST) > 0)
        {
            header('Location:' . BASEURL . '/login');
        } else {
            echo "Error";
        }
    }
}