<?php
require_once "Controladores/EmpleadoController.php";

    $controller = new EmpleadoController();

    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    switch ($action) {
        case 'edit':
            $controller->edit($id);
            break;
        default:
            $controller->index();
            break;
    }