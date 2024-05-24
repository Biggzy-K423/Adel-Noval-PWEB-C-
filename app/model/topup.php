<?php

class Topup
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllTopups()
    {
        $this->db->query('SELECT * FROM usertopup');
        return $this->db->resultSet();
    }
}
