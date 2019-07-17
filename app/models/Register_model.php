<?php

class Register_model {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertUser($data)
    {
        $query = "INSERT INTO users (UserEmail, UserPassword, UserAddress, UserPhoneNumber) values (:username, :password, :address, :phonenumber)";
        $this->db->query($query);
        $this->db->bind('username', $data['name']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('phonenumber', $data['number']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}