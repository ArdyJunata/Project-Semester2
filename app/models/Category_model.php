<?php

class Category_model {
    private $table = 'productcategories';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCategoriesName()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM products');
        return $this->db->resultSet();
    }

    public function getCategory($id)
    {
        $this->db->query('SELECT * FROM products WHERE CategoryID = :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM products WHERE ProductID = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getNameCategory($id)
    {
        $this->db->query('SELECT * FROM products s, productcategories c WHERE s.CategoryID = c.CategoryID and s.CategoryID = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

?>