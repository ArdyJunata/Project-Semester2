<?php


class Utama extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('utama/index', $data);
        $this->view('templates/footer');
    }
}

?>