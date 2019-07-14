<?php


class Contact extends Controller {
    public function index()
    {
        $data['judul'] = 'Contact';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('contact/index', $data);
        $this->view('templates/footer');
    }
}

?>