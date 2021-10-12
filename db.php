<?php

class DB{
    private static $instance = NULL;

    public static function connect(){
        if(!isset(self::$instance)){
            $opcPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_DBNAME,DB_USER,DB_PASS,$opcPDO);
        }
        return self::$instance;
    }
}