<?php

class Confirmation_model {
    private $table = 'shopingcart';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertOrdes($data)
    {
        $query = "INSERT INTO orders (userID, quantity, totalOrder) values(:id, :quantity, :total)";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('quantity', $data['quantity']);
        $this->db->bind('total', $data['total']);
        return $this->db->rowCount();
    }
}

?>