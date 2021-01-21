<?php

namespace Config;

class DB 
{
    public static function getConnection() 
    {
        $host = 'localhost';
        $dbname = 'db_user_1';
        $user = 'user_1';
        $pass = 'PASS!dkflbr4444';
        $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $db;
    }
}