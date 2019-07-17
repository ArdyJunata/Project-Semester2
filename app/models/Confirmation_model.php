<?php

class Cart_model {
    private $table = 'shopingcart';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function setCart($data)
    {
        $query = "INSERT INTO shopingcart values ('', 1, :total, :id, :userID)";
        $this->db->query($query);
        $this->db->bind('total', $data['ProductPrice']);
        $this->db->bind('id', $data['ProductID']);
        $this->db->bind('userID', $_SESSION['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function insertOrdes($data)
    {
        $query = "INSERT INTO orders (userID, quantity, totalOrder) values(:id, :quantity, :total)";
        $this->db->query($query);
        $this->db->bind('id', $_POST['id']);
        $this->db->bind('quantity', $_POST['quantity']);
        $this->db->bind('total', $_POST['total']);
        return $this->db->rowCount();
    }
}

?>