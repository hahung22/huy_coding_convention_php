<?php

class StudentController
{
    public function index(): bool
    {
        try {
            require "Models/Student.php";
            $students = Student::all();

            if (!empty($students)) {
                require "views/student/index.php";
                return true;
            }

            return false;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function create(): bool
    {
        try {
            require "Models/ClassObject.php";
            $classes = ClassObject::all();

            if (!empty($classes)) {
                require "views/student/create.php";
                return true;
            }

            return false;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function store(): bool
    {
        require "Models/Student.php";

        return Student::create($_POST);
    }

    public function edit(): bool
    {
        try {
            $id = $_GET["id"];
            require "Models/Student.php";
            $student = Student::find($id);
            $classes = ClassObject::all();

            if(! empty($student) && ! empty($classes)){
                require "views/student/edit.php";
                return true;
            }

            return false;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(): bool
    {
        require "Models/Student.php";

        return Student::update($_POST);
    }

    public function delete(): bool
    {
        require "Models/Student.php";

        return Student::delete($_GET["id"]);
    }
}