<?php

class ClassController
{
    public function index(): bool
    {
        try {
            require 'Models/ClassObject.php';
            $classes = ClassObject::all();

            if (!empty($classes)) {
                require 'views/class/index.php';
                return true;
            }

            return false;
        } catch (\Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function create(): bool
    {
        try {
            require 'views/class/create.php';

            return true;
        } catch (\Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function store(): bool
    {
        require 'Models/ClassObject.php';

        return ClassObject::create($_POST);
    }

    public function edit(): bool
    {
        try {
            $id = $_GET['id'];
            require 'Models/ClassObject.php';
            $class = ClassObject::find($id);

            if (!empty($class)) {
                require 'views/class/edit.php';
                return true;
            }

            return false;
        } catch (\Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(): bool
    {
        require 'Models/ClassObject.php';

        return ClassObject::update($_POST);
    }

    public function delete(): bool
    {
        require 'Models/ClassObject.php';

        return ClassObject::delete($_GET['id']);
    }
}
