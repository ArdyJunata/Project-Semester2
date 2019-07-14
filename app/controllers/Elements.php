<?php


class Elements extends Controller {
    public function index()
    {
        $data['judul'] = 'Elements';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('elements/index', $data);
        $this->view('templates/footer');
    }
}

?>