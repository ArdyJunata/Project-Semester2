<?php

class Register extends Controller {
    public function index()
    {
        $this->view('templates/css', $data);
        $this->view('register/index');
        $this->view('templates/script');
    }
}