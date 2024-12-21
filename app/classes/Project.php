<?php


namespace App\classes;


class Project
{
    private $conn;
    public $projects =[];
    public $project_name, $project_tool, $project_image, $project_link, $project_code;

    public function __construct($db,$post)
    {
        $this->conn = $db;
        if (isset($post['project_name']))
        {
            $this->project_name = $post['project_name'];
            $this->project_tool = $post['project_tool'];
            $this->project_image = $post['project_image'];
            $this->project_link = $post['project_link'];
            $this->project_code = $post['project_code'];
        }
    }

    public function getAllProjects()
    {
        $sql = "SELECT * FROM projects";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->projects[] = $row;
            }
        }
        return $this->projects;
    }

    public function sendProjectData()
    {

        $sql = "INSERT INTO `projects` (`project_name`, `project_tool`, `project_image`, `project_link`, `project_code`) VALUES ('$this->project_name', '$this->project_tool', '$this->project_image', '$this->project_link', '$this->project_code');";

        if ($result = $this->conn->query($sql)==true)
        {
            echo "<p style='color:green;'>Data inserted successfully!</p>";
        } else{
            echo "<p style='color:red;'>Data inserted Failed!</p>";
        }
    }

    public function deleteProjectData($id)
    {
        $sql = "DELETE FROM `projects` WHERE `projects`.`id` = $id;";
        if ($result = $this->conn->query($sql)==true)
        {
            echo "<p style='color:red;'>Data Deleted successfully!</p>";
        } else{
            echo "<p style='color:red;'>Data deleted Failed!</p>";
        }
    }
}