<?php
class Database{
    private static $databaseName="shellin";
    private static $username="root";
    private static $password="0724886404Was";
    private static $host="localhost";
    private static$port="3306";

    private static $database;

    private static function connect(){
        if(self::$database==null){
            Database::$database=new mysqli(Database::$host,Database::$username,Database::$password,Database::$databaseName,Database::$port);
        }

    }

    public static function iud($query){
        Database::connect();
        Database::$database->query($query);
    }
    public static function s($query){
        Database::connect();
        return Database::$database->query($query);

    }




}



?>