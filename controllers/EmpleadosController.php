<?php

include_once('models/Empleado.php');
include_once('db.php');

class EmpleadosController{
    public function index(){
        $arrEmpleados = Empleado::read();

        include_once('views/empleados/index.php');
    }

    public function create(){
        if($_POST){
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            Empleado::create($name,$email);
            header('Location: ./?controller=empleados&action=index');
        }

        include_once('views/empleados/create.php');
    }

    public function update(){
        $id = $_GET['id'];
        $empleado = Empleado::fetch($id);

        if($_POST){
            $id     = $_POST['id'];
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            Empleado::update($name,$email,$id);
        }
        
        include_once('views/empleados/update.php');
    }

    public function delete(){
        $id = $_GET['id'];
        Empleado::delete($id);
        header('Location: ./?controller=empleados&action=index');
    }
    
}