<?php
class Employee
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getEmployees()
    {
        $this->db->query("SELECT * FROM employee");
        return $this->db->resultSet();
    }

    public function getEmployee($id)
    {
        $this->db->query("SELECT * FROM employee WHERE id = :id");
        $this->db->bind(":id", $id);
        return $this->db->single();
    }
}
