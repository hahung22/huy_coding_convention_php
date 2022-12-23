<?php

require_once 'Controllers/Controller.php';
require_once 'Controllers/ClassController.php';
require_once 'Controllers/StudentController.php';

$action     = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'base';

switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'ClassController':
        switch ($action) {
            case 'index':
                $result = (new ClassController())->index();
                if(! $result){
                    echo 'There are currently no classes';
                }
                break;
            case 'create':
                $result = (new ClassController())->create();
                if(! $result){
                    echo 'Create view gone wrong, refresh page please';
                }
                break;
            case 'store':
                $result = (new ClassController())->store();
                if(! $result){
                    echo 'Error add a class';
                } else {
                    echo 'Success add a class';
                }
                break;
            case 'edit':
                $result = (new ClassController())->edit();
                if(! $result){
                    echo 'The student you want to edit is not exist';
                }
                break;
            case 'update':
                $result = (new ClassController())->update();
                if(! $result){
                    echo 'Error update this class';
                } else {
                    echo 'Success update this class';
                }
                break;
            case 'destroy':
                $result = (new ClassController())->delete();
                if(! $result){
                    echo 'Error delete this class';
                } else {
                    echo 'Success delete this class';
                }
                break;
            default:
                echo 'You have passed wrong action!';
                break;
        }
        break;
    case 'StudentController':
        switch ($action) {
            case 'index':
                $result = (new StudentController())->index();
                if(! $result){
                    echo 'There are currently no students';
                }
                break;
            case 'create':
                $result = (new StudentController())->create();
                if(! $result){
                    echo 'There are currently no classes for student';
                }
                break;
            case 'store':
                $result = (new StudentController())->store();
                if(! $result){
                    echo 'Error add a student';
                } else {
                    echo 'Success add a student';
                }
                break;
            case 'edit':
                $result = (new StudentController())->edit();
                if(! $result){
                    echo 'The student you want to edit is not exist';
                }
                break;
            case 'update':
                $result = (new StudentController())->update();
                if(! $result){
                    echo 'Error update this student';
                } else {
                    echo 'Success update this student';
                }
                break;
            case 'destroy':
                $result = (new StudentController())->delete();
                if(! $result){
                    echo 'Error delete this student';
                } else {
                    echo 'Success delete this student';
                }
                break;
            default:
                echo 'You have passed wrong action';
                break;
        }
        break;
    default:
        echo 'You have passed wrong controller';
}
