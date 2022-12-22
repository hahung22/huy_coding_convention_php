<?php

require 'Controllers/Controller.php';
require 'Controllers/ClassController.php';

$action     = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'base';

switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'ClassController':
        switch ($action) {
            case 'index':
                (new ClassController())->index();
                break;
            case 'create':
                (new ClassController())->create();
                break;
            case 'store':
                (new ClassController())->store();
                break;
            case 'edit':
                (new ClassController())->edit();
                break;
            case 'update':
                (new ClassController())->update();
                break;
            case 'destroy':
                (new ClassController())->delete();
                break;
            default:
                echo 'You have passed wrong action!';
                break;
        }
        break;
    case 'StudentController':
        switch ($action) {
            case 'index':
                (new StudentController())->index();
                break;
            case 'create':
                (new StudentController())->create();
                break;
            case 'store':
                (new StudentController())->store();
                break;
            case 'edit':
                (new StudentController())->edit();
                break;
            case 'update':
                (new StudentController())->update();
                break;
            case 'destroy':
                (new StudentController())->delete();
                break;
            default:
                echo 'You have passed wrong action';
                break;
        }
        break;
    default:
        echo 'You have passed wrong controller';
}
