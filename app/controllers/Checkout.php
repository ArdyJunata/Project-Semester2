<?php


class Checkout extends Controller {
    public function index()
    {
        $data['judul'] = 'Checkout';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('checkout/index', $data);
        $this->view('templates/footer');
    }
}

?>