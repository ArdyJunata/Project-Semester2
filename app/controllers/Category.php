<?php


class Category extends Controller {
    public function index()
    {
            $data['judul'] = 'Home';
            $data['category'] = $this->model('Category_model')->getAllCategoriesName();
            $data['product'] = $this->model('Category_model')->getAllProduct();
            $this->view('templates/header', $data);
            $this->view('category/index', $data);
            $this->view('templates/rated', $data);
            $this->view('templates/footer');
            
        
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Product';
        $data['category'] = $this->model('Category_model')->getAllCategoriesName();
        $data['grupCategory'] = $this->model('Category_model')->getCategory($id);
        $this->view('templates/header', $data);
        $this->view('category/detail', $data);
        $this->view('templates/rated', $data);
        $this->view('templates/footer');
    }

}

?>