<?php
class Product
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProducts()
    {
        $this->db->query("SELECT * FROM product");
        return $this->db->resultSet();
    }

    public function getProduct($id)
    {
        $this->db->query("SELECT * FROM product WHERE id = :id");
        $this->db->bind(":id", $id);
        return $this->db->single();
    }
}
