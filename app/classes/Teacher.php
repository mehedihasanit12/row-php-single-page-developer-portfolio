<?php


namespace App\classes;


class Teacher
{
    private $conn;
    public $teachers =[];

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAllTeachers()
    {
        $sql = "SELECT * FROM blogs";
        $result = $this->conn->query($sql);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->teachers[] = $row;
            }
        }
        return $this->teachers;
    }
}