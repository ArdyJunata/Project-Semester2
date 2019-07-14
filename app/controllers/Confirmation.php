<?php


class Confirmation extends Controller {
    public function index($id=1)
    {
        $data['judul'] = 'Confirmation';
        $data['cart'] = $this->model('Cart_model')->getCartProduct($id);
        $data['shoppingcart'] = $this->model('Cart_model')->getShopCart($id);
        $this->view('templates/header', $data);
        $this->view('confirmation/index', $data);
        $this->view('templates/footer');
    }
}

?>