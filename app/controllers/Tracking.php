<?php


class Tracking extends Controller {
    public function index()
    {
        $data['judul'] = 'Tracking';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('tracking/index', $data);
        $this->view('templates/footer');
    }
}

?>