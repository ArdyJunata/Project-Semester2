<?php

class Cart_model
{
    private $table = 'shopingcart';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function setCart($data)
    {
        if ($this->cekCart($data) > 0) { 
            $this->updateCart($data);
        } else {
            $query = "INSERT INTO shopingcart values ('', 1, :total, :id, :userID)";
            $this->db->query($query);
            $this->db->bind('total', $data['ProductPrice']);
            $this->db->bind('id', $data['ProductID']);
            $this->db->bind('userID', $_SESSION['id']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function cekCart($data)
    {
        $query = "SELECT * shoopingcart WHERE userID = :userID and ProductID = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['ProductID']);
        $this->db->bind('userID', $_SESSION['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getCartProduct($id)
    {
        $query = "SELECT * from products p, shopingcart s WHERE p.productID = s.productID and s.userID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllCartProduct($id)
    {
        $query = "SELECT * from products p, shopingcart s WHERE p.productID = s.productID and s.userID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function updateCart($data)
    {
        $query = "UPDATE shopingcart SET quantity = :quantity, TotalPice = :price*:quantity WHERE ProductID = :id and userID = :userID";
        $this->db->query($query);
        $this->db->bind('quantity', $data['Quantity']);
        $this->db->bind('id', $data['ProductID']);
        $this->db->bind('userID', $_SESSION['id']);
        $this->db->bind('price', $data['ProductPrice']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getShopCart($id)
    {
        $query = "SELECT sum(TotalPice) as total from shopingcart WHERE userID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
