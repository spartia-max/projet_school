<?php
namespace App;

class App{

    const DB_NAME='college';
    const DB_USER='clemence';
    const DB_PASS='amery';
    const DB_HOST='localhost';

    private static $database;

    public static function getDb(){

        if(self::$database===null){
            self::$database= new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
            return self::$database;
        }
    }
}