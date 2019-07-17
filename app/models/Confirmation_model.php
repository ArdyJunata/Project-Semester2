<?php

class Confirmation_model {
    private $table = 'shopingcart';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertOrder($data)
    {
        $query = "INSERT INTO orders (userID, totalOrder) values(:id, :total)";
        $this->db->query($query);
        $this->db->bind('id', $_SESSION['id']);
        $this->db->bind('total', $data['total']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>