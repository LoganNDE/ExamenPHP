<?php
require_once "Models/Empleado.php";

class EmpleadoController {
    private $empleadoModel;
    
    public function __construct() {
    $this->empleadoModel = new Empleado();
    }

    public function index() {
    $empleados = $this->empleadoModel->getAll();
    require "Views/listar.php";
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $telefono = $_POST['telefono'];
            $cargo = $_POST['cargo'];
            $this->empleadoModel->update($id, $nombre, $edad, $telefono, $cargo);

        header("Location: index.php");
        } else {
            $empleado = $this->empleadoModel->getById($id);
        require "Views/edit.php";
        }
        }

}