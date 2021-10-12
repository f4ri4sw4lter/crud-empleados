<?php

class Empleado{
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email){
        $this->id    = $id;
        $this->name  = $name;
        $this->email = $email;
    }

    public static function read(){
        $arrEmpleados = [];
        $connect = DB::connect();
        $query = $connect->query('SELECT * FROM empleados');
        foreach($query->fetchAll() as $empleado){
            $arrEmpleados[] = new Empleado($empleado['id'],$empleado['name'],$empleado['email']);
        }
        return $arrEmpleados;
    }

    public static function create($name, $email){
        $connect = DB::connect();
        $query = $connect->prepare('INSERT INTO empleados(name, email) VALUES(?,?)');
        $query->execute(array($name,$email));
    }

    public static function delete($id){
        $connect = DB::connect();
        $query = $connect->prepare("DELETE FROM empleados WHERE id=?");
        $query->execute(array($id));
    }

    public static function fetch($id){
        $connect = DB::connect();
        $query = $connect->prepare("SELECT * FROM empleados WHERE id=?");
        $query->execute(array($id));
        $empleado = $query->fetch();
        return new Empleado($empleado['id'],$empleado['name'],$empleado['email']);
    }

    public static function update($name,$email,$id){
        $connect = DB::connect();
        $query = $connect->prepare('UPDATE empleados SET name=?, email=? WHERE id=?');
        $query->execute(array($name,$email,$id));
    }
}