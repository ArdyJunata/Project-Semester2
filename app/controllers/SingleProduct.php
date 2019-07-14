<?php


class SingleProduct extends Controller {
    public function index()
    {
        $data['judul'] = 'Product Detail';
        $data['product'] = $this->model('SingleProduct_model')->getUserById();
        $this->view('templates/header', $data);
        $this->view('singleProduct/index', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id) {
        $data['judul'] = 'Product Detail';
        $data['joinCategory'] = $this->model('Category_model')->getNameCategory($id);
        $data['product'] = $this->model('Category_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('singleProduct/index', $data);
        $this->view('templates/footer', $data);
    }
}

?>