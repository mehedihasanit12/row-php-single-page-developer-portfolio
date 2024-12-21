<?php

require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\Database;
use App\classes\Project;


$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page']=='admin')
    {
        $home->admin();
    }
}

elseif (isset($_POST['project_btn']))
{
    $database = new Database();
    $project = new Project($database->conn,$_POST);
    $project->sendProjectData();
}

elseif (isset($_POST['data_delete_btn']))
{
    $database = new Database();
    $project = new Project($database->conn,$_POST);
    $project->deleteProjectData($_POST['project_id']);
}

