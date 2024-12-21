<?php

namespace App\classes;

class Home
{
    public function index()
    {
        $database = new Database();
//        $teacherObj = new Teacher($database->conn);
//        $teacherObj->getAllTeachers(); // মেথড কল করা হয়েছে
//        $teachers = $teacherObj->teachers; // ডাটা অ্যাসাইন করা হয়েছে
        $projectObj = new Project($database->conn,$_POST);
        $projectObj->getAllProjects();
        return view('home', ['projects' => $projectObj]);

    }

    public function admin()
    {
        $database = new Database();
        $projectObj = new Project($database->conn,$_POST);
        $project = $projectObj->getAllProjects();
        return view('admin', ['projects' => $project]);
    }
}