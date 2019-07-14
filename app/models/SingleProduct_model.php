<?php

class SingleProduct_model {
    private $table = 'products';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE ProductID = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

?>