<?php

class ClassController
{
    public function index(): void
    {
        require 'Models/ClassObject.php';
        $classes = ClassObject::all();

        require 'views/class/index.php';
    }

    public function create():void
    {
        require 'views/class/create.php';
    }

    public function store(): void
    {
        require 'Models/ClassObject.php';
        ClassObject::create($_POST);
    }

    public function edit(): void
    {
        $id = $_GET['id'];
        require 'Models/ClassObject.php';
        $class = ClassObject::find($id);

        require 'views/class/edit.php';
    }

    public function update(): void
    {
        require 'Models/ClassObject.php';
        ClassObject::update($_POST);
    }

    public function delete(): void
    {
        require 'Models/ClassObject.php';
        ClassObject::delete($_GET['id']);
    }
}
