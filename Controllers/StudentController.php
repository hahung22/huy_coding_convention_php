<?php

class StudentController
{
    public function index(): void
    {
        require "Models/Student.php";
        $arr = Student::all();

        require "views/student/index.php";
    }

    public function create(): void
    {
        require "Models/ClassObject.php";
        $lops = ClassObject::all();

        require "views/student/create.php";
    }

    public function store(): void
    {
        require "Models/Student.php";
        Student::create($_POST);
    }

    public function edit(): void
    {
        $id = $_GET["id"];
        require "Models/Student.php";
        $each = Student::find($id);

        require "Models/ClassObject.php";
        $lops = ClassObject::all();

        require "views/student/edit.php";
    }

    public function update(): void
    {
        require "Models/Student.php";
        Student::update($_POST);
    }

    public function delete(): void
    {
        require "Models/Student.php";
        Student::delete($_GET["id"]);
    }
}