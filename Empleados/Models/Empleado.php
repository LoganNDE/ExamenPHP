<?php
require_once "Config/Conexion.php";
class Empleado {
    private $pdo;
    public function __construct() {
        $database = new Conexion();
        $this->pdo = $database->conectar();
    }
// a partir de aquí iran todas los métodos CRUD

    public function getAll(){
        try{
            $query = "SELECT * FROM tbl_empleados";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getById($id){
        try{
            $query = "SELECT * FROM tbl_empleados WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }



    public function update($id, $nombre, $edad, $telefono, $cargo) {
        $query = "UPDATE tbl_empleados SET nombre = :nombre, edad = :edad, telefono = :telefono, cargo = :cargo WHERE id = :id";
        $insercion = $this->pdo->prepare($query);
        $insercion->bindParam(":id", $id);
        $insercion->bindParam(":nombre", $nombre);
        $insercion->bindParam(":edad", $edad);
        $insercion->bindParam(":telefono", $telefono);
        $insercion->bindParam(":cargo", $cargo);
        return $insercion->execute();
        }
}