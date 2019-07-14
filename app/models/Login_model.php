<?php

class Login_model {

    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekLogin($data)
    {
        $query = "SELECT * FROM users WHERE UserEmail = :name and UserPassword = :password";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cek($data)
    {
        $query = "SELECT * FROM users WHERE UserEmail = :name and UserPassword = :password";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getUserByLogin($id, $passwd)
    {
        $this->db->query('SELECT * FROM users WHERE UserEmail=:id and UserPassword=:passwd');
        $this->db->bind('id',$id);
        $this->db->bind('passwd',$passwd);
        return $this->db->single();
    }
}

?>